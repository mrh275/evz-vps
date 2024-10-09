<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Services',
            'activeMenu' => 'services',
        ];

        return view('user.services', $data);
    }
}
