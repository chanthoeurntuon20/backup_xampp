<?php namespace App\Controllers;

class Teacher extends BaseController
{
	
	public function index()
	{
       return "Good morning Teachers";
	}
	public function teaching()
	{
		return "I am teaching Codeigniter 4";
	}
	public function managesubject($subject)
	{
		return "I am teaching: ".$subject;
	}

	//--------------------------------------------------------------------

}
