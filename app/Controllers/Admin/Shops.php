<?php
namespace App\Controllers\Admin;

class Shops extends AdminController{
    function index(){
        $request = \Config\Services::request();
        if( !$request->getGet("search") )
            $this->data["shops"] = \App\Libraries\Shop::by_type(0);
        else{
            $this->data["shops"] = \App\Libraries\Shop::by_url( $request->getGet("search") );
        }
        $this->display("admin/shops");
    }
    function change_selling($id){
        $shop = new \App\Libraries\Shop($id,false);
        $shop->toggle_selling();
        return redirect()->to("/admin/shops/show/".$id);
    }
    function update($shop_id){
        $request = \Config\Services::request();
        $m = new \App\Models\Shop(); 
        $m->update($shop_id,[ "url"=>$request->getPost("url"),
                            "description"=>$request->getPost("description"),
                            "type"=>$request->getPost("type") ]);
        return redirect()->to("/admin/shops/show/".$shop_id);
    }
    function change_services($shop_id){
        $request = \Config\Services::request();
        $data = $request->getPost();
        $m = new \App\Models\Services();
        foreach( $data["id_list"] as $id ){
            $m->update($id,["title"=>$data["service_title"][$id],"price"=>$data["service_price"][$id]]);
        }
        return redirect()->to("/admin/shops/show/".$shop_id);
    }
    function show($id){
        $m = new \App\Models\Sitetype();
        $this->data["types"] = $m->findAll();
        $this->data["shop"] = new \App\Libraries\Shop($id,false);
        $this->display("admin/shop");
    }
}
