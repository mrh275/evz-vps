<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $user = session('user');
        $data = [
            'title' => 'Services',
            'activeMenu' => 'services',
            'user' => $user
        ];

        return view('user.services', $data);
    }
}
