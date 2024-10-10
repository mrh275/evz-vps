<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ringkasan Order',
            'activeMenu' => '-'
        ];

        return view('user.summary', $data);
    }

    public function payment(Request $request)
    {
        $data = [
            'title' => 'Pembayaran',
            'activeMenu' => '-',
            'va_code' => $request->va_code,
        ];

        return view('user.payment', $data);
    }

    public function paymentDetails($param)
    {
        $data = [
            'title' => 'Detail Pembayaran',
            'activeMenu' => '-',
            'va_code' => $param->va_code,
        ];

        dd($data);
        return view('user.payment', $data);
    }
}
