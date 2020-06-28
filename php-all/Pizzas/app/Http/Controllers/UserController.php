<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guests;
class UserController extends Controller
{
    public function create(){
        return view("user.create");
    }

    public function store(){
        $user = new Guests();
        $user->name = request('name');
        $user->age = request('age');
        $user->province = request('province');
        $user->save();

        return redirect('/');
    }
}
