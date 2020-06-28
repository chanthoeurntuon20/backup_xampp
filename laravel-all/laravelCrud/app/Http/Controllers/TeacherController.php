<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
class TeacherController extends Controller
{
    public function index(){
        $teacher = Teachers::all();
        //dd($teacher);
        return view('teacher.index',['teacher'=>$teacher]);
    }
    public function create(){
        return view('teacher.create');
    }
    public function show($id){
        $teacher = Teachers::findOrFail($id);
        return view('teacher.show',['teacher'=>$teacher]);
    }
    //data insert to database
    public function store(){
        $teacher = new Teachers();
        $teacher->name = request('name');
        $teacher->age = request('age');
        $teacher->province = request('province');
        $teacher->save();
        return redirect('/teacher');
    }
    public function destroy($id){
        $teacher = Teachers::findOrFail($id);
        $teacher->delete();
        return redirect('/teacher')->with(["message"=>"Delete success!!"]);
    }
}
