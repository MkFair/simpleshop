<?php
namespace App\Models;
use CodeIgniter\Model;
class User extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['fio', 'site_url',"site_type"];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
}
