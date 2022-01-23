<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthPenilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:penilai')->except('logout');
    }

    public function showLoginForm()
    {
        return view('penilai/login');
    }

    public function login(Request $request)
    {
        config()->set('auth.defaults.guard', 'penilai');

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credential)) {
            $auth = Auth::user();
            if ($auth->role == 'penilai') {
                Auth::guard('penilai')->attempt($credential, $request->filled('remember'));
                return redirect()->intended(route('penilai.home'));
            }
            Auth::guard('penilai')->logout();
        }

        return redirect()->back()->withInput($request->only('username', 'password'))->withErrors(['error' => ['Username atau password yang anda masukkan salah!']]);
    }

    public function logout(Request $request)
    {
        Auth::guard('penilai')->logout();

        $request->session()->invalidate();

        return redirect('/penilai');
    }
}
