<?php
namespace App\Models;
use CodeIgniter\Model;
class User extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['fio',"email","password"];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
}
