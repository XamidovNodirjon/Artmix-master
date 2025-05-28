<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about.index');
    }

    public function projects()
    {
        return view('projects.index');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
