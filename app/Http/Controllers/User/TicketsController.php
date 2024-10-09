<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tickets',
            'activeMenu' => 'tickets',
        ];

        return view('user.tickets', $data);
    }
}
