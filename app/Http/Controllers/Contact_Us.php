<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact_Us extends Controller
{
    public function index()
    {
        $title = "تماس با ما";
        return view('Contact_Us',compact('title'));
  }
}
