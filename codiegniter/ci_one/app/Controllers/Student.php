<?php namespace App\Controllers;

class Student extends BaseController
{
	
	public function index()
	{
       return "I am a student";
	}
	public function learning()
	{
		return "I really love Codeigniter 4";
	}
	public function playSport()
	{
		return "We play the football";
	}
	public function reading($bookTitle,$author)
	{
		return "I am reading the book: ".$bookTitle." and author name: ".$author;
	}

	//--------------------------------------------------------------------

}
