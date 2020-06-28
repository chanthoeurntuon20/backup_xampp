<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorController extends Controller
{
    //
    function index(){
        return view('doctor.index');
    }
    function create(){
        return view('doctor.create');
    }
    function show($id){
        return view('doctor.show');
    }
}
