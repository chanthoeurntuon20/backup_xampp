<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// can use table
use App\Teachers;
class TeacherController extends Controller
{
    // View all information
    public function index(){
        // select * from teacher
        $teacher = Teachers::all();
        // dd($teacher);
        return view("teacher.index",['teachers'=>$teacher]);
    }
    //show input field
    public function create(){
        return view("teacher.create");
    }
    // detail information
    public function show($id){
        $teacher = Teachers::findOrFail($id);
        return view("teacher.show", ['teacher'=>$teacher]);
    }
    // insert data to table
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
        return redirect('/teacher');
    }
}
