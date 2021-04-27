<?php
namespace \App\Models;
use \CodeIgniter\Model;

class Coupons extends Model{
    protected $table = "coupons";
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ["user_id","created_on","count","shop_id","paid","price"];
} 
