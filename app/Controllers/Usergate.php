<?php

namespace App\Controllers;
class Usergate extends BaseController{
    function register(){
        echo view("usergate/header");
        echo view("usergate/register");
        echo view("usergate/footer");
    }
    function login(){
        echo view("usergate/header");
        echo view("usergate/login");
        echo view("usergate/footer");
    }
    function login_process(){
        if( $this->request->getVar("email",FILTER_SANITIZE_EMAIL) and $this->request->getVar("password") ){
            
        }
    }
    function seller_reg(){
        $validation = \Config\Services::validation();
        $validation->setRules([
            "fio"=>"required",
            "email"=>"required|valid_email",
            "password"=>"required|min_length[5]",
            "site_url"=>"required|valid_url",
            "site_type"=>"required",
            "services"=>"required",
        ],[
            "fio"=>["required"=>"Необходимо заполнить поле"],
            "email"=>[
                "required"=>"Необходимо заполнить поле",
                "valid_email"=>"Указан некорректный Email"
            ],
            "password"=>[
                "required"=>"Необходимо заполнить поле",
                "min_length"=>"Минимальная длинна пароля составляет 5 символов"
            ],
            "site_url"=>[
                "required"=>"Необходимо заполнить поле",
                "valid_url"=>"Укажите корректный URL адрес сайта"
            ],
            "site_type"=>[
                "required"=>"Необходимо заполнить поле",
            ],
            "services"=>[
                "required"=>"Необходимо заполнить поле",
            ],
        ]);
        if( $validation->run() ){
            $user_model = new \App\Models\User();
            $fields = $this->request->getVar(null,FILTER_SANITIZE_STRING);
            $user_model->insert($fields);
            return json_encode(["status"=>"ok"]);
        }else{
            return json_encode(["status"=>"error","errorlist"=>$validation->getErrors()]);
        }
    }
    function buyer_reg(){
        $validation = \Config\Services::validation();
        $validation->setRules([
            "fio"=>"required",
            "email"=>"required|valid_email",
            "password"=>"required|min_length[5]",
        ],[
            "fio"=>["required"=>"Необходимо заполнить поле"],
            "email"=>[
                "required"=>"Необходимо заполнить поле",
                "valid_email"=>"Указан некорректный Email"
            ],
            "password"=>[
                "required"=>"Необходимо заполнить поле",
                "min_length"=>"Минимальная длинна пароля составляет 5 символов"
            ]
        ]);
        if( $validation->run() ){
            return json_encode(["status"=>"ok"]);
        }else{
            return json_encode(["status"=>"error","errorlist"=>$validation->getErrors()]);
        }
    }
    
}
