<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// model (can use table student)
use App\Students;
class StudentController extends Controller
{
    public function index(){
        $student = Students::all();
        return view('student.index', ['student' => $student]);
    }
    public function create(){
        return view('student.create');
    }
    public function show($id){
        $student = Students::findOrFail($id);
        return view('student.show', ['student' => $student]);
    }
    public function destroy($id){
        $student = Students::findOrFail($id);
        $student->delete();
        return redirect('/student');
    }
    public function store(){
        // column name= 
        $student = new Students();
        $student->name = request('name');
        $student->age = request('age');
        $student->province = request('province');
        $student->save();
        return redirect('/student');
    }
}
