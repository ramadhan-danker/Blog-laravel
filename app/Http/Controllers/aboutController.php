<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function showAbout()
    {
        return view('about', [
            "title" =>
            "About",
            "active" => 'about',
            "name" => "Ramadhan",
            "email" => "ramadanker266@gmail.com",
            "image" => "aki.png",
            "tentang" => "Jadi saya adalah anime.",

        ]);
    }
}
