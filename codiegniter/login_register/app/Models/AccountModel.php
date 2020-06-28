<?php namespace App\Models;
use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table      = 'account';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    
    protected $allowedFields = ['username', 'password', 'fullName'];
}