<?php
namespace App\Models;
use CodeIgniter\Model;
class Shop extends Model{
    protected $table      = 'shops';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
}
