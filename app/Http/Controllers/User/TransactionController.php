<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $user = session('user');
        $data = [
            'title' => 'Ringkasan Order',
            'activeMenu' => '-',
            'user' => $user
        ];

        return view('user.transactions.summary', $data);
    }

    public function payment(Request $request)
    {
        $user = session('user');
        $data = [
            'title' => 'Pembayaran',
            'activeMenu' => '-',
            'va_code' => $request->va_code,
            'user' => $user
        ];

        return view('user.transactions.payment', $data);
    }

    public function paymentDetails($param)
    {
        $user = session('user');
        $data = [
            'title' => 'Detail Pembayaran',
            'activeMenu' => '-',
            'va_code' => $param->va_code,
            'user' => $user
        ];

        dd($data);
        return view('user.payment', $data);
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
}
