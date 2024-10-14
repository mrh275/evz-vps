<?php

namespace App\Http\Controllers;

use App\Models\VpsPlans;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        $vpsPlan = VpsPlans::all();
        $data = [
            'title' => 'Portal',
            'content' => 'Welcome to the portal page!',
            'vpsPlan' => $vpsPlan,
        ];

        return view('portal', $data);
    }
}
