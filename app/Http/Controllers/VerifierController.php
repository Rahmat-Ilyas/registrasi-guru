<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:verifier');
    }

    public function home()
    {
        return view('verifier/home');
    }

    public function page($page)
    {
        return view('verifier/' . $page);
    }

    public function pagedir($dir = NULL, $page)
    {
        return view('verifier/' . $dir . '/' . $page);
    }
}
