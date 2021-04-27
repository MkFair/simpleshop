<?php
namespace App\Libraries;
require_once 'alfaapi/privateAPI.php';
require_once 'alfaapi/Exception.php';
use ALFAcoins\ALFAcoins_privateAPI;
use ALFAcoins\ALFAcoins_Exception;
class Alfacoins {
    protected $shop_name = 'ShopName 123';
    protected $shop_password = 'MyShopPassword';
    protected $shop_secret_key = 'a8a0e3497c8b67b024babc9a4daf5f5c';
    protected $currency = 'RUB';
    protected $options = [
          // notificationURL is used for notification about order's status change
          // PLEASE NOTE: you can only use verified websites in the websites integration area
          'notificationURL' => 'http://example.com/receive.php',
          // redirectURL is used to redirect your customer from the payment page
          'redirectURL' => 'http://example.com/completed?id=MyOrder123',
          // payerName is your customer's name used to notify your customer about order
          'payerName' => 'John Smith',
          // payerEmail is your customer's e-mail address used to notify your customer about order
          'payerEmail' => 'john.smith@test.com',
          "test" => 1,
          "status":"completed"
        ];
    protected $type = 'bitcoin';
    protected $order_description = "";
    function __construct(){
        $this->api = new ALFAcoins_privateAPI($this->shop_name, $this->shop_password, $this->shop_secret_key);
    }
    function create_order($coupons_id,$amount){
        try{
            $order = $this->api->create($this->type, $amount, $this->currency, $coupons_id, $this->order_description, $this->options);
            var_dump($order);
        } catch (ALFAcoins_Exception $e) {
          echo "Order create method failed: " . $e->getMessage() . PHP_EOL;
        }
    }
}
