<?php namespace App\Controllers;
use App\Models\AccountModel;

class Account extends BaseController
{
	public function index()
	{
		//$data = [];
		
		return view('account/login');
	}
	public function signup()
	{
	
		//$data = [];
		return view('account/signup');
	}
	public function save(){
		$accountModel = new $accountModel();
		$accountModel->insert($_POST);
		return redirect()->to('account/index');
	}
	

	//--------------------------------------------------------------------

}
