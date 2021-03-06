<?php namespace App\Controllers;
use App\Models\StudentModel;
class Student extends BaseController
{
	public function index()
	{
        $student = new StudentModel();
        $data['students'] = $student->findAll();
		return view('students/index',$data);
	}
	public function showFormAdd()
	{
		return view('students/addStudent');
	}
	public function showFormEdit($id)
	{
		$student = new StudentModel();
        $data['student']= $student->find($id);
		return view('students/editStudent',$data);
	}
	public function deleteStudent($id)
	{
		$student = new StudentModel();
		$student->delete($id);
		return redirect()->to('/student');
	}
	public function addStudent()
	{
		$student = new StudentModel();
		$student->insert($_POST);
		return redirect()->to('/student');
	}
	public function updateStudent()
	{
		$student = new StudentModel();
        $student->update($_POST['id'],$_POST);
		return redirect()->to('/student');
	}

	//--------------------------------------------------------------------

}
