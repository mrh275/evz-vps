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
}
