<?php
namespace App\Libraries;

class Seller extends User{
    public $shop;
    function __construct($user_id){
        parent::__construct($user_id);
        if( $this->has_shop($user_id) )
            $this->shop = new Shop($user_id);
    }
    static function get_session(){
        $session = session();
        if( $session->has("user") ){
            return new Seller($session->get("user")["id"]);
        }
        else
            return null;
    }
    function has_shop($user_id){
        $m = new \App\Models\Shop();
        return (bool)$m->where(["user_id"=>$user_id])->countAllResults();
    }
    static function create_user($user_id){
        return new Seller($user_id);
    }
    function create_shop(array $shop_info){
        $this->shop = Shop::create($this->id,$shop_info);
    }
}
