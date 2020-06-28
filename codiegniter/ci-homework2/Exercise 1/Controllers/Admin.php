<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		
		return view('admin/index');
		
	}
	public function showDashboard()
	{
		
		return view('admin/dashboard');
	}
	public function viewAllUser()
	{
		
		return view('admin/user');
	}

	//--------------------------------------------------------------------

}
