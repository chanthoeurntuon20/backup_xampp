<?php namespace App\Controllers;
use App\Models\UserModel;
class Users extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function sigInAccount()
	{
		return view('auths/login');
	}
	public function registerAccount()
	{
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'email'=>'required',
				'password'=>'required|min_length[1]|max_length[50]',
				'address'=>'required',
				'role'=>'required',
				
			];
			//  if($this->validate($rules)){
				$userModel = new UserModel();
				$userEmail = $this->request->getVar('email');
				$userPassword = $this->request->getVar('password');
				$userAddress = $this->request->getVar('address');
				$userData = array(
					'email'=>$userEmail ,
					'password'=>$userPassword,
					'address'=>$userAddress,
				);
				$userModel->insert($userData);
				return redirect()->to('/');

			// }else{
			// 	$data['validation'] = $this->validator;
			// 	return view('index',$data);
			// }
		}
		return view('auths/register');

	}

	//--------------------------------------------------------------------

}
