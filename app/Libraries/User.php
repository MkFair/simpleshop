<?php
namespace App\Libraries;

class User{
    protected $id;
    protected $fio;
    protected $email;
    protected $password;
    static function create(array $userdata){
        $model = new App\Models\User();
        $userdata["password"] = $this->password_hash($userdata["password"]);
        $model->insert($userdata);
        $um = $model->where(["email"=>$userdata["email"]])->first();
        $user = new User($um->id);
        return $user;
    }
    function __construct($user_id){
        $model = new App\Models\User();
        $userdata = $model->get($user_id);
        $this->id = $userdata->id;
        $this->fio = $userdata->fio;
        $this->email = $userdata->email;
        $this->password = $userdata->password;
    }
    function update(array $userdata){
        $this->fio = $userdata["fio"];
        $this->email = $userdata["email"];
        $this->password = $this->password_hash($userdata["password"])
        $model = new App\Models\User();
        $model->update($this->id,["fio"=>$this->fio,"password"=>$this->password,"email"=>$this->email]);
    }
    function password_hash($pass){
        return  password_hash($pass,PASSWORD_BCRYPT);
    }
}
