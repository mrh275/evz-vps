<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Portal',
            'content' => 'Welcome to the portal page!',
        ];


        return view('portal', $data);
    }
}
