<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = session('user');

        $data = [
            'title' => 'Dashboard',
            'activeMenu' => 'dashboard',
            'user' => $user
        ];

        return view('user.dashboard', $data);
    }
}
