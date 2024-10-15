<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        $user = User::find(session()->get('user'));
        $trx = Transaction::where('user_id', $user[0]->id)->with('vpsPlan')->get();
        $data = [
            'title' => 'Invoices',
            'activeMenu' => 'invoices',
            'user' => $user[0],
            'trx' => $trx
        ];

        return view('user.invoices', $data);
    }
}
