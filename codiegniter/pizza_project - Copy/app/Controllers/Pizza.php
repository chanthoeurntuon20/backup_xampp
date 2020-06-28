<?php namespace App\Controllers;
use App\Models\PizzaModel;
class Pizza extends BaseController
{
	public function index(){
		$pizzaModel = new PizzaModel();
		$data['pizzas'] = $pizzaModel->findAll();
		return view('index',$data);
	}
	public function createPizza()
	{
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'name'=>'required',
				'price'=>'required|min_length[1]|max_length[50]',
				'ingredient'=>'required',
				
			];
			//  if($this->validate($rules)){
				$pizzaModel = new PizzaModel();
				$pizzaName = $this->request->getVar('name');
				$pizzaPrice = $this->request->getVar('price')."$";
				$pizzaIngredient = $this->request->getVar('ingredient');
				$pizzaData = array(
					'name'=>$pizzaName,
					'price'=>$pizzaPrice,
					'ingredient'=>$pizzaIngredient,
				);
				$pizzaModel->insert($pizzaData);
				return redirect()->to('/');

			// }else{
			// 	$data['validation'] = $this->validator;
			// 	return view('index',$data);
			// }
		}
	}
	public function deletePizza($id){
		$pizzaModel = new PizzaModel();
		$pizzaModel->delete($id);
		return redirect()->to("/");
	}
	//--------------------------------------------------------------------

}
