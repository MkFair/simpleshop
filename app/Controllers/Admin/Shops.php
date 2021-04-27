<?php
namespace App\Controllers\Admin;

class Shops extends AdminController{
    function index(){
        $this->data["shops"] = \App\Libraries\Shop::by_type(0);
        $this->display("admin/shops");
    }
    function change_selling($id){
        $shop = new \App\Libraries\Shop($id,false);
        $shop->toggle_selling();
        return redirect()->to("/admin/shops/show/".$id);
    }
    function show($id){
        $this->data["shop"] = new \App\Libraries\Shop($id,false);
        $this->display("admin/shop");
    }
}
