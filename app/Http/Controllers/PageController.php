<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['title' => '- Home Page']);
    }
    /*public function product()
    {
        return view('product', ['title' => '- Home Product']);
    }*/
    public function program()
    {
        return view('program', ['title' => '- Home Program' ]);
    }
    public function news()
    {
        return view('news', ['title' => '- Home News' ]);
    }
    public function about()
    {
        return view('about', ['title' => '- About Us']);
    }
    public function contact()
    {
        return view('contact', ['title' => '- Contact Us']);
    }
}
