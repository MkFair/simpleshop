<?php
namespace App\Controllers\Admin;

class Sitetypes extends AdminController {
    function index(){
        $model_types = new \App\Models\Sitetype();
        $this->data["types"] = $model_types->findAll();
        $this->display("admin/sitetypes");
    }
    function add(){
        $model_types = new \App\Models\Sitetype();
        $model_types->insert(["name"=>$this->request->getPost("newtype")]);
        helper("url");
        return redirect()->to("/admin/sitetypes");
    }
    function delete(){
        $model_types = new \App\Models\Sitetype();
        $model_types->delete($this->request->getGet("id"));
        helper("url");
        return redirect()->to("/admin/sitetypes");
    }
}
