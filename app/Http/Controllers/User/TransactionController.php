<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\VpsPlans;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index($vpsId)
    {
        // Get payment channel
        $apiKey = config('services.tripay.api_key_test');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/merchant/payment-channel',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response)->data;
        // End get payment channel


        $user = session('user');
        $vpsPlan = VpsPlans::find($vpsId);
        $data = [
            'title' => 'Ringkasan Order',
            'activeMenu' => '-',
            'user' => $user,
            'vpsPlan' => $vpsPlan,
            'paymentChannels' => $response ? $response : $error
        ];

        return view('user.transactions.summary', $data);
    }

    public function payment(Request $request)
    {

        $vpsPlan = VpsPlans::find($request->vps_plan);
        $itemDuration = $request->item_duration;
        $va_code = $request->va_code;
        $itemPrice = $vpsPlan->price * $itemDuration;
        $totalPrice = $itemPrice + ($itemPrice * 0.11);
        $merchantRef = fake()->unique()->randomNumber(5) . "/VPS" . $request->vps_plan . "/INV/EVZ/X/" . date("Y");
        $user = User::find(session()->get('user'));
        $userId = $user[0]->id;
        $orderDate = date("Y-m-d H:i:s");

        $apiKey       = config('services.tripay.api_key_test');
        $privateKey   = config('services.tripay.private_key_test');
        $merchantCode = config('services.tripay.merchant_code_test');

        $data = [
            'method'         => $va_code,
            'merchant_ref'   => $merchantRef,
            'amount'         => $totalPrice,
            'customer_name'  => $user[0]->name,
            'customer_email' => $user[0]->email,
            'customer_phone' => '085155288214',
            'order_items'    => [
                [
                    'name'        => $vpsPlan->name,
                    'price'       => $totalPrice,
                    'quantity'    => 1,
                ],
            ],
            'expired_time' => (time() + (48 * 60 * 60)), // 48 jam
            'signature'    => hash_hmac('sha256', $merchantCode . $merchantRef . $totalPrice, $privateKey)
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response)->data;
        // dd($response);
        try {
            $trx = Transaction::create([
                'user_id' => $userId,
                'trx_id' => $response->reference,
                'merchant_ref' => $response->merchant_ref,
                'va_code' => $response->payment_method,
                'payment_code' => $response->pay_code,
                'order_date' => $orderDate,
                'due_date' => date("Y-m-d H:i:s", $response->expired_time),
                'status' => $response->status,
                'item_price' => $itemPrice,
                'tax' => $itemPrice * 0.11,
                'merchant_fee' => $response->total_fee,
                'total_price' => $response->amount,
                'item_duration' => $itemDuration,
                'vps_id' => $vpsPlan->id
            ]);
            return redirect()->route('user.paymentDetails', $trx->trx_id);
        } catch (\Exception $e) {
            return back()->with([
                'error' => true,
                'message' => 'Terjadi kesalahan, silahkan coba lagi'
            ]);
        }
    }

    public function paymentDetails($param)
    {
        $user = User::find(session()->get('user'));
        $trx = Transaction::where('trx_id', $param)->with('vpsPlan')->first();
        $data = [
            'title' => 'Detail Pembayaran',
            'activeMenu' => '-',
            'user' => $user[0],
            'trx' => $trx
        ];

        return view('user.transactions.payment', $data);
    }

    public function invoice($trxId)
    {
        $user = User::find(session()->get('user'));
        $trx = Transaction::where('trx_id', $trxId)->with('vpsPlan')->first();
        $data = [
            'title' => 'Invoice',
            'activeMenu' => '-',
            'paymentStatus' => false,
            'user' => $user[0],
            'trx' => $trx
        ];

        return view('user.transactions.print-invoice', $data);
    }

    public function checkPayment($trx_id)
    {
        try {
            $user = User::find(session()->get('user'));
            $transaction = Transaction::where('trx_id', $trx_id)->with('vpsPlan')->first();

            if ($transaction->status == 'paid') {
                $services = Services::create([
                    'user_id' => $user[0]->id,
                    'trx_id' => $transaction->trx_id,
                    'merchant_ref' => $transaction->merchant_ref,
                    'item_name' => $transaction->vpsPlan->name,
                    'item_desc' => $transaction->vpsPlan->name . ' CPU ' . $transaction->vpsPlan->cpu . ' RAM ' . $transaction->vpsPlan->ram . ' Storage ' . $transaction->vpsPlan->storage . ' Bandwidth ' . $transaction->vpsPlan->bandwidth,
                    'start_date' => Carbon::now(),
                    'expire_date' => Carbon::now()->addMonths($transaction->item_duration),
                    'status' => 'active',
                ]);
                $data = [
                    'status' => $transaction->status,
                    'message' => 'Pembayaran berhasil diterima',
                    'services' => $services
                ];

                return response()->json($data);
            } else if ($transaction->status == 'unpaid') {
                $data = [
                    'status' => $transaction->status,
                    'message' => 'Pembayaran belum diterima',
                ];

                return response()->json($data);
            } else if ($transaction->status == 'expired') {
                $data = [
                    'status' => $transaction->status,
                    'message' => 'Transaksi sudah kadaluarsa! Silahkan buat transaksi baru.',
                ];

                return response()->json($data);
            } else {
                $data = [
                    'status' => 'error',
                    'message' => 'Terjadi kesalahan, transaksi tidak ditemukan',
                ];

                return response()->json($data);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan, silahkan coba lagi'
            ]);
        }
    }
}
