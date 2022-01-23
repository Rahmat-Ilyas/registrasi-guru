<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:penilai');
    }

    public function home()
    {
        return view('penilai/home');
    }

    public function page($page)
    {
        return view('penilai/' . $page);
    }

    public function pagedir($dir = NULL, $page)
    {
        return view('penilai/' . $dir . '/' . $page);
    }
}
