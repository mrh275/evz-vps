<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('user.dashboard');
        }

        $data = [
            'title' => 'Login'
        ];
        return view('auth.login', $data);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $userResponse = User::where('email', $credentials['email'])->first();
                $user = $userResponse->toArray();
                $request->session()->put('user', $user);
                return redirect()->route('user.dashboard');
            } else {
                return back()->with([
                    'error' => true,
                    'message' => 'Email atau password salah'
                ]);
            }
        } catch (Exception $e) {
            return back()->with([
                'error' => true,
                'message' => 'Email dan password tidak boleh kosong'
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->flush();
        return redirect()->route('portal.index');
    }
}
