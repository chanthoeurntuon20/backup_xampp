<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class PagesController extends Controller
{
//    public function index(){
//        $text = "Wellcom2020b";
//         return view('welcome',compact('text'));
//     }
// public function index(){
//     $text = "Wellcom2020b";
//      return view('welcome',['text'=>$text]);//
//  }
 public function action(){
     $title = "action";
     return view('action',['action'=>$title]);
 }
 public function about(){
     $title = "about";
     return view('about',['about'=>$title]);
 }
 public function join(){
     $title = "join";
     return view('join',['join'=>$title]);
 }
 public function new(){
     return view('new');
 }
 public function contact(){
     return view('contact');
 }
 public function listCustomer(){
    $teacher =  array(
        '0'=>array('id'=>1,'name'=>'Chandaraty','email'=>'chanthoeurn@example.org'),
        '1'=>array('id'=>1,'name'=>'Chandy','email'=>'chandy@example.org'),
     );
     return view('welcome',['teacher',$teacher]);
 }
 public function index(){
    $student =student::all();
   // dd($student);
   return view('welcome',['student'=>$student]);
 }
}
