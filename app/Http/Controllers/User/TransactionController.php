<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\VpsPlans;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index($vpsId)
    {
        $user = session('user');
        $vpsPlan = VpsPlans::find($vpsId);
        $data = [
            'title' => 'Ringkasan Order',
            'activeMenu' => '-',
            'user' => $user,
            'vpsPlan' => $vpsPlan
        ];

        return view('user.transactions.summary', $data);
    }

    public function payment(Request $request)
    {
        $user = session('user');
        $vpsPlan = VpsPlans::find($request->vps_plan);
        $itemDuration = $request->item_duration;
        $va_code = $request->va_code;
        $totalPrice = $vpsPlan->price * $itemDuration;
        $merchantRef = fake()->unique()->randomNumber(5) . "/VPS1/INV/EVZ/X/" . date("y");
        $user = User::find(session()->get('user'));
        $userId = $user[0]->id;
        $orderDate = date("Y-m-d H:i:s");
        $dueDate = date("Y-m-d H:i:s", strtotime("+12 hour"));
        $status = 'unpaid';
        $trxId = 'TRX' . fake()->unique()->numerify('##########');

        $data = [
            'title' => 'Pembayaran',
            'activeMenu' => '-',
            'va_code' => $va_code,
            'user' => $user[0]
        ];

        try {
            Transaction::create([
                'user_id' => $userId,
                'trx_id' => $trxId,
                'merchant_ref' => $merchantRef,
                'va_code' => $va_code,
                'order_date' => $orderDate,
                'due_date' => $dueDate,
                'status' => $status,
                'total_price' => $totalPrice,
                'item_duration' => $itemDuration,
                'vps_id' => $vpsPlan->id
            ]);

            return redirect()->route('user.paymentDetails', $trxId);
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

    public function invoice()
    {
        $user = session('user');
        $data = [
            'title' => 'Invoice',
            'activeMenu' => '-',
            'paymentStatus' => false,
            'user' => $user
        ];

        return view('user.transactions.print-invoice', $data);
    }

    public function checkPayment($trx_id)
    {
        $transaction = Transaction::find($trx_id);
        $data = [
            'title' => 'Cek Pembayaran',
            'activeMenu' => '-',
            'transaction' => $transaction
        ];

        return response()->json($data);
    }
}
