<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizzas;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = Pizzas::all();
        return view('pizza.index', ['pizzas' => $pizzas]);
    }
    public function show($id) {
        $pizza = Pizzas::findOrFail($id);
        return view('pizza.show', ['pizza' => $pizza]);
    }

    public function create() {
        
        return view('pizza.create');
    }

    public function store() {
        $pizza = new Pizzas();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();
        return redirect('/pizza')->with('message', 'Thank You for your order');
    }

    public function destroy($id) {
        $pizza = Pizzas::findOrFail($id);
        $pizza->delete();
        return redirect('/pizza')->with('message', 'Delete Order Success');
    }
}
