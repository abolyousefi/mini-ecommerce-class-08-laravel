<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $title = 'درباره ما';
        return view('About_Us',compact('title'));
    }
}
