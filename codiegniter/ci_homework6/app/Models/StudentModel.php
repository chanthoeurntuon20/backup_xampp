<?php namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'tbl_student';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'email','age','profile'];

    public function addStudent($studentInfo){
        $this->insert([
            'name'=>$studentInfo['name'],
            'email'=>$studentInfo['email'],
            'age'=>$studentInfo['age'],
            'profile'=>$studentInfo['profile']
        ]);
    }
}
