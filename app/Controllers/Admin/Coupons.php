<?php
namespace App\Controllers\Admin;

class Coupons extends AdminController{
    function index(){
        $this->data["coupons"] = ["last_day"=>0,"last_week"=>0,"last_month"=>0];
        $this->data["coupons_by_interval"] = [];
        $this->display("admin/coupon_list");
    }
    
}
