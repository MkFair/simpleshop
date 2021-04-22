<?php
namespace App\Controllers;

class Account extends BaseController{
    function index(){
        $this->data["user_info"] = new \StdClass();
        $this->data["user_info"]->fio = "Иван Иванов";
        $this->data["user_info"]->email = "example@example.com";
        $this->data["user_info"]->password = "password";
        $this->display("account/index.php");
    }
    
    
}
