<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }
    public function create(){
        return view('student.create');
    }
    public function store(){
        $student = new students();
        $student->name = request('name');
        $student->age = request('age');
        $student->province = request('province');
        $student->save();
        return redirect('/student');
    }
}
