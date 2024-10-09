<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Invoices',
            'activeMenu' => 'invoices'
        ];

        return view('user.invoices', $data);
    }
}
