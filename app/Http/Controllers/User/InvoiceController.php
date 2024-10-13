<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $user = session('user');
        $data = [
            'title' => 'Invoices',
            'activeMenu' => 'invoices',
            'user' => $user
        ];

        return view('user.invoices', $data);
    }
}
