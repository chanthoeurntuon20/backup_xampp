<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        //dd($student);
        return view('student.index',compact('students'));
    }
    public function create(){
        return view('student.create');
    }
    public function show(){
        return view('student.show');
    }
}
