<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $user = session('user');
        $data = [
            'title' => 'Tickets',
            'activeMenu' => 'tickets',
            'user' => $user
        ];

        return view('user.tickets', $data);
    }
}
