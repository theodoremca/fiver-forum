<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactPageController extends Controller
{
    public function index()
    {
        return view('contact');
    }
}
