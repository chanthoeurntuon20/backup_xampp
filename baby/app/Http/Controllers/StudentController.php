<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }
    public function show($id){
        
        //dd($student);
        return view('student.show');
    }
    public function create(){
        return view('student.create');
    }
    public function store(){
      
        return redirect('/student');
    }
    public function destroy($id){

        return redirect('/student');
    }
}
