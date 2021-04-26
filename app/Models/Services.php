<?php
namespace App\Models;

class Services extends \CodeIgniter\Model{
    protected $table="services";
    protected $allowedFields= ["shop_id","title","price"];
    function add(int $shop_id, array $service_list){
        foreach( $service_list as $service ){
            $this->insert(["shop_id"=>$shop_id,"title"=>$service,"price"=>0]);
        }
    }
    function by_shop_id( int $shop_id ){
        return $this->where(["shop_id"=>$shop_id])->findAll();
    }
}
