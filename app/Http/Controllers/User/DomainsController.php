<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Domains',
            'activeMenu' => 'domains',
        ];

        return view('user.domains', $data);
    }
}
