<?php
namespace App\Libraries;

class User{
    protected $id;
    protected $role;
    protected $fio;
    protected $email;
    protected $password;
    static function create(array $userdata){
        $userdata["password"] = self::password_hash($userdata["password"]);
        $model = new \App\Models\User();
        $new_user_id = $model->insert($userdata);
        $user = static::create_user($new_user_id);
        return $user;
    }
    static function is_user(){
        $session = session();
        return $session->has("user");
    } 
    static function create_user($user_id){
        return new User($user_id);
    }
    static function login($email,$password){

        $model = new \App\Models\User();
        $user = $model->where(["email"=>$email])->first();
        if( $user and password_verify($password, $user->password) ){
            return static::create_user($user->id);
        }
        return false;
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
    function set_role(int $role_id){
        $this->role = $role_id;
        $model = new \App\Models\User();
        $model->update($this->id,["role"=>$this->role]);
    }
    function get_role(){
        return ( $this->role==1?"user":( $this->role==2?"seller":null ) );
    }
    static function check_role(int $role_id,int $user_id){
        $model = new \App\Models\User();
        $user = $model->where(["id"=>$user_id])->first();
        return $user->role == $role_id;
    }
    function __get($key){
        if( isset($this->$key) and $key!="password" ){
            return $this->$key;
        }
    }
    function password_hash(string $pass){
        return  password_hash($pass, PASSWORD_DEFAULT);
    }
}
