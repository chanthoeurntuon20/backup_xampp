<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['email', 'password','address','role'];

    public function registerUser($userInfo){
        $this->insert([
            'email'=>$userInfo['name'],
            'password'=>$userInfo['password'],
            'address'=>$userInfo['address'],
            'role'=>$userInfo['role'],
        ]);
    }
    
}
