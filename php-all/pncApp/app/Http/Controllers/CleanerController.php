<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cleaners;
class CleanerController extends Controller
{
    public function index(){
        //$cleaner = Cleaners::all();
        $cleaner = Cleaners::orderBy('name', 'desc')->get();
       // dd($cleaner);
        return view('cleaner.index',['cleaners'=>$cleaner]);
    }
    public function show($id){
        $cleaner = Cleaners::findOrFail($id);
        return view('cleaner.show',['cleaner'=>$cleaner]);
    }
    public function create(){
        return view('cleaner.create');
    }
    
    public function store(){
        $cleaner = new Cleaners();
        $cleaner->name = request('name');
        $cleaner->age = request('age');
        $cleaner->province = request('province');
        $cleaner->save();
        return redirect('/cleaner')->with(['message' => 'Insert already!!!']);
    }
    public function destroy($id){
        $cleaner = Cleaners::findOrFail($id);
        $cleaner->delete();
        return redirect('/cleaner')->with(['message' => 'Delete already!!!']);
    }
}
