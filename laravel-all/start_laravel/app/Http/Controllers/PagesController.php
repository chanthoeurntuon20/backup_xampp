<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function action(){
        return view("action");
    }
    function about(){
        $abouts = "I love you Dad";
        return view("about",compact('abouts'));
    }
    function join(){
        return view("join");
    }
    function news(){
        return view("news");
    }
    function contact(){
        return view("contact");
    }
}
