<?php
namespace App\Libraries;

class User{
    protected $id;
    protected $fio;
    protected $email;
    protected $password;
    static function create(array $userdata){
        $userdata["password"] = self::password_hash($userdata["password"]);
        $model = new \App\Models\User();
        $new_user_id = $model->insert($userdata);
        $user = new User($new_user_id);
        return $user;
    }
    function set_session(){
        $session = session();
        $session->set("user",["id"=>$this->id]);
    }
    static function get_session(){
        $session = session();
        if( $session->has("user") ){
            return new User($session->get("user")["id"]);
        }
        else
            return null;
    }
    function __construct(int $user_id){
        $model = new \App\Models\User();
        $userdata = $model->find($user_id);
        $this->id = $userdata->id;
        $this->fio = $userdata->fio;
        $this->email = $userdata->email;
        $this->password = $userdata->password;
        $this->role = $userdata->role;
    }
    function changeRole(int $role_id){
        $this->role = $role_id;
        $model = new \App\Models\User();
        $model->update($this->id,["role"=>$this->role]);
    }
    function update(array $userdata){
        if( !empty($userdata["fio"]) )
            $this->fio = $userdata["fio"];
        if( !empty($userdata["email"]) )
            $this->email = $userdata["email"];
        if( !empty($userdata["password"]) )
            $this->password = $this->password_hash($userdata["password"]);
        $model = new \App\Models\User();
        $model->update($this->id,["fio"=>$this->fio,"password"=>$this->password,"email"=>$this->email]);
    }
    function getRole(){
        return ( $this->role==1?"user":( $this->role==2?"seller":null ) );
    }
    function __get($key){
        if( isset($this->$key) and $key!="password" ){
            return $this->$key;
        }
    }
    function password_hash(string $pass){
        return  password_hash($pass,PASSWORD_BCRYPT);
    }
}
