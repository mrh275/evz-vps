<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Register'
        ];

        return view("auth.register", $data);
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
            'confirm_password' => 'required|same:password'
        ]);

        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);

        try {
            if ($user) {
                $request->session()->regenerate();
                $request->session()->put('user', $credentials['email']);
                return back()->with([
                    'success' => true,
                    'message' => 'Registrasi akun anda berhasil, silahkan login untuk melanjutkan.'
                ]);
            } else {
                return back()->with([
                    'error' => true,
                    'message' => 'Registration failed! Please try again'
                ]);
            }
        } catch (\Exception $e) {
            return back()->with([
                'error' => true,
                'message' => 'Registration failed! Please try again'
            ]);
        }
    }
}
