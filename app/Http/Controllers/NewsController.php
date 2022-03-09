<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function main()
    {
        return view('newss', [
            "title" => "First Single News ",
            "news" => News::all()
        ]);
    }
    public function show($id)
    {
        return view('newss', [
            "title" => "Second Single News",
            "news" => News::find($id)
        ]);
    }
}
