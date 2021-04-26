<?php
namespace App\Controllers;

class Account extends AccountController{
    function index(){
        $session = session();
        $this->data["additional_block"] = "";
        $this->data["additional_tab_panel"] = "";
        if($this->current_user->get_role())
            $this->data["additional_block"] = view("account/".$this->current_user->get_role()."_block",$this->data);
        if( $this->current_user->get_role() == "user" )
            $this->data["additional_tab_panel"] = view("account/coupons");
        $this->data["error"] = $session->getFlashdata("error");
        $this->data["success"] = $session->getFlashdata("success");
        $this->display("account/index.php");
    }
    function update(){
        $request = \Config\Services::request();
        $session = session();
        if( $request->getMethod()=="post" ){
            $validation = \Config\Services::validation();
            $validation->setRules([
                "fio"=>"required",
                "email"=>"required|valid_email",
                "password"=>"permit_empty|min_length[5]",
            ]);//добавить доп проверку почты
            if( $validation->run($request->getPost())!==false ){
                $update_data = [];
                if( $request->getPost("fio") )
                    $update_data["fio"] = $request->getPost("fio");
                if( $request->getPost("password") )
                    $update_data["password"] = $request->getPost("password");
                if( $request->getPost("email") )
                    $update_data["email"] = $request->getPost("email");
                $this->current_user->update($update_data);
                $session->setFlashdata("success","Данные успешно обновлены");
            }else{
                $session->setFlashdata("error","ФИО и Email обязатеьны к заполнению. При смене пароля - минимальная длина пароля должна быть 5 символов.");
            }
        }
        return redirect()->to("/account");
    }
    
}
