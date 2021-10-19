<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('blog_home.index');
    }

    public function contact()
    {
        return view('blog_home.contact');
    }
}
