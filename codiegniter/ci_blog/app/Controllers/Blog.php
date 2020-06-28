<?php namespace App\Controllers;

class Blog extends BaseController
{
	
	public function blog($slug)
	{
		return view('blog/post');
	}

	//--------------------------------------------------------------------

}
