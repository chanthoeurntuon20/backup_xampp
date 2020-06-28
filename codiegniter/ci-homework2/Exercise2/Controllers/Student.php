<?php namespace App\Controllers;

class Student extends BaseController
{
	public function index()
	{
		
		return view('students/index');
		
	}
	public function showSubject ()
	{
		
		return view('students/subject');
	}
	public function viewAllStudent()
	{
		
		return view('students/student');
	}


	//--------------------------------------------------------------------

}
