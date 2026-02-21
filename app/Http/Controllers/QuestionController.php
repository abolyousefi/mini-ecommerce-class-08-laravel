<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $title = 'سوالات متداول';
        return view('Questions',compact('title'));
    }
}
