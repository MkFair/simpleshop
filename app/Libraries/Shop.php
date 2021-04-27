<?php
namespace App\Libraries;

class Shop{
     protected $id;
     protected $url;
     protected $description;
     protected $type_name;
     protected $type;
     protected $selling_on;
     protected $user_id;
     protected $services;
     
    function __construct($id,$user_id_flag=true){
        if($user_id_flag)
            $this->from_db("user_id",$id);
        else
            $this->from_db("id",$id);
    }
    function toggle_selling(){
        $this->selling_on = !$this->selling_on;
        $model = new \App\Models\Shop();
        $data = $model->update($this->id,["selling_on"=>$this->selling_on]);
    }
    function get_type_id(){
        return $this->type;
    }
    function fill_current(array $fields){
        $this->id = empty($fields["id"])?0:$fields["id"];
        $this->user_id = $fields["user_id"];
        $this->url = $fields["url"];
        $this->description = $fields["description"];
        $this->type = $fields["type"];
        $this->set_type_name($this->type);
        //$this->services = empty($fields["services"])?[]:$fields["services"];
        $this->selling_on = empty($fields["selling_on"])?[]:$fields["selling_on"];
        $m = new \App\Models\Services();
        $this->services = $m->by_shop_id($this->id);
    }
    function set_type_name($id){
        $m = new \App\Models\Sitetype();
        $this->type_name = $m->select("name")->find($id)["name"];
    }
    function from_db($key,$val){
        $model = new \App\Models\Shop();
        $data = $model->where([$key=>$val])->first();
        $this->fill_current($data);
    }
    function __get($key){
        if( $key == "type" )
            return $this->type_name;
        return $this->$key;
    }
    static function create(int $user_id, array $fields,?array $services){
        $model = new \App\Models\Shop();
        $created_data = new \DateTime("NOW");
        $id = $model->insert(["user_id"=>$user_id,"url"=>$fields["url"],"description"=>$fields["description"],"created_on"=>$created_data->format("Y-m-d H:i:s"),"type"=>$fields["type"]]);
        $shop = new Shop($user_id);
        if( $services ){
            $m = new \App\Models\Services();
            $m->add($id,$services);
            $shop->services = $m->by_shop_id($id);
        }
        return $shop;
    }
    static function by_type(?int $type_id){
        $model = new \App\Models\Shop();
        if( $type_id ){
            $shop_list = $model->select("user_id")->where(["type"=>$type_id])->findAll();
        }else{
            $shop_list = $model->select("user_id")->findAll();
        }
        if( $shop_list ){
            $shop_list_obj = [];
            foreach( $shop_list as $shop_record ){
                $shop_list_obj[] = new Shop( $shop_record["user_id"] );
            }
            return $shop_list_obj;
        }
        return [];
    }
    static function by_url(string $search_url){
        $model = new \App\Models\Shop();
        $shop_list = $model->select("user_id")->where(["url"=>$search_url])->findAll();
        if( $shop_list ){
            $shop_list_obj = [];
            foreach( $shop_list as $shop_record ){
                $shop_list_obj[] = new Shop( $shop_record["user_id"] );
            }
            return $shop_list_obj;
        }
        return [];
    }
    function request_coupons(int $user_id, int $count ){
        $status = false;
        $m = new \App\Models\Coupons();
        $date = new DateTime("NOW");
        $status = $m->insert([
            "user_id"=>$user_id, 
            "created_on"=>$date->format("Y-m-d H:i:s"), 
            "shop_id"=>$this->id,
            "count"=>$count,
        ]);
        //$m->
        return $status;
    }
}
