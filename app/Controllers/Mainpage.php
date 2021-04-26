<?php

namespace App\Controllers;

class Mainpage extends BaseController{
    function index(){
        $request = \Config\Services::request();
        $m = new \App\Models\Sitetype();
        $this->data["types"] = $m->findAll();
        $this->data["shop_list"] = \App\Libraries\Shop::by_type( $request->getGet("type") );
        $this->display("index");
    }
    function show($id){
        $this->display("show_site");
    }
}
