<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthVerifierController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:verifier')->except('logout');
    }

    public function showLoginForm()
    {
        return view('verifier/login');
    }

    public function login(Request $request)
    {
        config()->set('auth.defaults.guard', 'verifier');

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
            if ($auth->role == 'verifier') {
                Auth::guard('verifier')->attempt($credential, $request->filled('remember'));
                return redirect()->intended(route('verifier.home'));
            }
            Auth::guard('verifier')->logout();
        }

        return redirect()->back()->withInput($request->only('username', 'password'))->withErrors(['error' => ['Username atau password yang anda masukkan salah!']]);
    }

    public function logout(Request $request)
    {
        Auth::guard('verifier')->logout();

        $request->session()->invalidate();

        return redirect('/verifier');
    }
}
