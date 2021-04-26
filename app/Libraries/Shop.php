<?php
namespace App\Libraries;

class Shop{
     protected $id;
     protected $url;
     protected $description;
     protected $type;
     protected $selling_on;
     protected $user_id;
     protected $services;
    function __construct($user_id){
        $this->from_db("user_id",$user_id);
    }
    function fill_current(array $fields){
        $this->id = empty($fields["id"])?0:$fields["id"];
        $this->user_id = $fields["user_id"];
        $this->url = $fields["url"];
        $this->description = $fields["description"];
        $this->type = $fields["type"];
        $this->services = empty($fields["services"])?[]:$fields["services"];
        $this->selling_on = empty($fields["selling_on"])?[]:$fields["selling_on"];
    }
    function from_db($key,$val){
        $model = new \App\Models\Shop();
        $data = $model->where([$key=>$val])->first();
        $this->fill_current($data);
    }
    function __get($key){
        return $this->$key;
    }
    static function create(int $user_id, array $fields){
        $model = new \App\Models\Shop();
        $created_data = new \DateTime("NOW");
        $id = $model->insert(["user_id"=>$user_id,"url"=>$fields["url"],"description"=>$fields["description"],"created_on"=>$created_data->format("Y-m-d H:i:s"),"type"=>$fields["type"]]);
        return new Shop($user_id);
    }
    
}
