<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class StudentController extends Controller
{
    public function index(){
        //$student = Students::all();
        //$student = Students::latest()->get();//first
        //$student = Students::orderBy('age','asc')->get();
        $student = Students::where('age','12')->get();
       // dd($student);
        return view('student.index',['student'=>$student]);
    }
    public function show($id){
        $student = Students::findOrFail($id);
        //dd($student);
        return view('student.show',['student'=>$student]);
    }
    public function create(){
        return view('student.create');
    }
    public function store(){
        $student = new Students();
        $student->name = request('name');
        $student->age = request('age');
        $student->email = request('email');
        $student->save();
        //error_log($student);
        return redirect('/student');
    }
    public function destroy($id){
        $student = Students::findOrFail($id);
        $student->delete();
        return redirect('/student');
    }
}
