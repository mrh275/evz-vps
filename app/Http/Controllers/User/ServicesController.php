<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $user = User::find(session()->get('user'));
        $services = Services::where('user_id', $user[0]->id)->get();
        $data = [
            'title' => 'Services',
            'activeMenu' => 'services',
            'user' => $user[0],
            'services' => $services
        ];

        return view('user.services', $data);
    }
}
