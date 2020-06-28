<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Students;
class StudentController extends Controller
{
   public function index(){
    return view('student.index');
   }
   public function show($id){
    return view('student.show',['id'=>$id]);
   }
   public function create(){
    return view('student.create');
   }
   // run file index
   public function store(){
      $student = request('name');
      error_log($student);
    return redirect('/student');
   }
}
