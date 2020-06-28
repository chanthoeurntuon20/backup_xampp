<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public  function index(){ 
         return view('welcome'); 
  }
  public function show(){
    $pizzas = [
        ["type" => "Mono Pizza", "ingredient" => "Flower, Meat, Vegetable", "price" => 500, "location" => "Cambodia"],
        ["type" => "Volcano Pizza", "ingredient" => "Eggs, Meat, Vegetable", "price" => 800, "location" => "Thailand"],
        ["type" => "Kungfu Pizza", "ingredient" => "Sea food, Meat, Vegetable", "price" => 300, "location" => "China"],
        ["type" => "Ninja Pizza", "ingredient" => "Moon, Meat, Mountain", "price" => 900, "location" => "Japan"],
        ["type" => "Love Pizza", "ingredient" => "Sun, Milk, Fish", "price" => 400, "location" => "Korean"],
        ["type" => "Vegas Pizza", "ingredient" => "Salat, Chees, Cow", "price" => 600, "location" => "American"]
    ];
    return view('pizza',['pizzas' => $pizzas]);
  }
    
    public function display($topic,$cat){
        return view("detail",
        [
            'topic' => $topic,
            'cat' => $cat
        ]);
    }
}
