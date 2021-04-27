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
        $this->data["site"] = new \App\Libraries\Shop($id,false);
        if( !$this->data["site"] ){
            return redirect()->to("/");
        }
        $this->display("show_site");
    }
    function buy(){
        if( \App\Libraries\User::is_user() ){
            $request = \Config\Services::request();
            $validation = \Config\Services::validation();
            $validation->setRules([
                "count"=>"required",
                "site_id"=>"required",
            ]);
            if( $validation->run($request->getPost())!==FALSE ){
                $site = new \App\Libraries\Shop($request->getPost("site_id"),false);
                var_dump($site);
                if( $site and $site->selling_on ){
                    echo "1";
                    $res_id = $site->request_coupons($this->current_user->id,$request->getPost("count"));
                    if( $res_id ){
                        echo "2";
                        $alc = new \App\Libraries\Alfacoins();
                        $alc->create_order($res_id,$request->getPost("count"));
                    }
                }
            }
            var_dump($validation->getErrors());
        }
    }
}
