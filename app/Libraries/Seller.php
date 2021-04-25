<?php
namespace App\Libraries;

class Seller extends User{
    protected $shop;
    function __construct($user_id){
        parent::__construct($user_id);
        $this->shop = new Shop($user_id);
    }
}
