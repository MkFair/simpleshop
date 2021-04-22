<?php
namespace App\Libraries;

class Shop{
     $id;
     $url;
     $description;
     $type;
     $selling_on;
     $user_id;
     $services;
    function __construct($user_id){
        $this->from_db("user_id",$user_id);
    }
    function fill_urrent(array $fields){
        $this->id = empty($fields["id"])?0:$fields["id"];
        $this->user_id = $fields["user_id"];
        $this->url = $fields["url"];
        $this->description = $fields["description"];
        $this->type = $fields["type"];
        $this->services = empty($fields["services"])?[]:$fields["services"];
    }
    function from_db($key,$val){
        $model = new App\Models\Shop();
        $model->insert($fields);
        $data = $model->where([$key=>$val])->first();
        $this->fill_urrent($data);
    }
    static function create(array $fields){
        $this->from_db("user_id",$fields["user_id"]);
    }
    
}
