<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypographyController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('layouts/typography/index');
    }
}
