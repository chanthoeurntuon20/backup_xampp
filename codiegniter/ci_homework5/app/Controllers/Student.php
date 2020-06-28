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
		$studentModel = new StudentModel();
		$studentModel->delete($id);
		return redirect()->to('/student');
	}
	public function addStudent(){
		
		$studentModel = new StudentModel();
		$data = [];
		if($this->request->getMethod() == "post"){
			$rules = [
				'name'=>'required|alpha_numeric|min_length[3,max_length 20]',
				'email'=>'required|valid_email|min_length[6]|max_length[50]',
				'age'=>'required|max_length[3]|numeric',
				'profile'=>'required'
			];
			if($this->validate($rules)){
				$studentName = $this->request->getVar('name');
				$studentEmail = $this->request->getVar('email');
				$studentAge = $this->request->getVar('age');
				$file = $this->request->getFile('profile');
				$studentProfile = $file->getRandomName();
				$studentData = array(
					'name'=>$studentName,
					'email'=>$studentEmail,
					'age'=>$studentAge,
					'profile'=>$studentProfile
				);
				$studentModel->addStudent($studentData);
				$file->move("images",$studentProfile);
			}else{
				$data['validation'] = $this->validator;
			}
	
		return view('students/addStudent',$data);
		// return redirect()->to('/student',$data);
	}
		
	}
	public function updateStudent()
	{
		$studentModel = new StudentModel();
        $studentModel->update($_POST['id'],$_POST);
		return redirect()->to('/student');
	}
	
	//--------------------------------------------------------------------

}
