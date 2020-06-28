<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
class TeacherController extends Controller
{
    function index(){
        $teacher = Teachers::all();
       // dd($teacher);
        return view('teacher.index',['teacher'=>$teacher]);
    }
    function create(){
        return view('teacher.create');
    }
    function show($id){
        $teacher = Teachers::findOrFail($id);
        return view('teacher.show',['teacher'=>$teacher]);
    }
    function store(){
       $teacher = new Teachers();
       $teacher->name = request('name');
       $teacher->age = request('age');
       $teacher->province = request('province');
       $teacher->save();
       //error_log($teacher);
        return redirect('/teacher');
    }
    function destroy($id){
        $teacher = Teachers::findOrFail($id);
        $teacher->delete();
        return redirect('/teacher');
    }
}
