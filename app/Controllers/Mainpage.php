<?php

namespace App\Controllers;

class Mainpage extends BaseController{
    function index(){
        $m = new \App\Models\Sitetype();
        $this->data["types"] = $m->findAll();
        $this->display("index");
    }
    
}
