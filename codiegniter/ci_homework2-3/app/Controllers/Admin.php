<?php namespace App\Controllers;
use App\Models\AdminModel;
class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'name' => 'chanthoeurn tuon',
			'age'=> '19',
			'email'=> 'chanthoeurn@mail.com',
		]; 
			$user = new AdminModel();
			$user->insert($data);
			$allUser['userData'] = $user->findAll();
		return view('admin/index',$allUser);
		
	} 

	public function deleteUser($id){
		$user = new AdminModel();
		$user->find($id);
		$user->delete($id);
		return redirect()->to('/admin');
	}
	public function showDashboard()
	{
		return view('admin/dashboard');
	}
	public function viewAllUser()
	{
		$data = [
				'name' => ['Ronan', 'Rady', 'Channak', 'Seiha', 'Hugo'],
				'position'=> ['Coordinator', 'Trainer', 'Teacher', 'Manager', 'Internship'],
				'age'=> [30, 25, 31, 40, 20],
				'location'=> ['France', 'Cambodia', 'Cambodia', 'Cambodia', 'France']
			]; 
 
		return view('admin/user',$data);
	}

	//--------------------------------------------------------------------

}
