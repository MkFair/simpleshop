<?php
namespace App\Controllers\Admin;

class Users extends AdminController{
    function users(){
        $model = new \App\Models\User();
        $this->data["users"] = $model->select(["email","id"])->where(["role"=>1])->findAll();
        $this->display("admin/users");
    }
    function sellers(){
        $model = new \App\Models\User();
        $this->data["users"] = $model->select(["email","id"])->where(["role"=>2])->findAll();
        $this->display("admin/users");
    }
    function user($id){
        $this->data["user"] = new \App\Libraries\User($id);
        $this->display("admin/user");
    }
    function seller($id){
        $this->data["user"] = new \App\Libraries\Seller($id);
        $this->display("admin/seller");
    }
}
