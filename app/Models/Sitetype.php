<?php
namespace App\Models;
use CodeIgniter\Model;
class Sitetype extends Model{
    protected $table="site_types";
    protected $allowedFields = ["name"];
}
