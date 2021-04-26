<?php namespace App\Controllers;
use App\Libraries\User;
use App\Libraries\Seller;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
    function test_seller(){
        
        $seller = Seller::create(["email"=>"admin@admin1.com","fio"=>"Иван Иванов","password"=>"password1"]);
        $seller->set_role(2);
        $seller->set_session();
        $seller->create_shop(["url"=>"shop.shop","description"=>"description","type"=>1]);
        var_dump($seller);
    }
    function test_user(){
        
        $user = User::create(["email"=>"admin@admin.com","fio"=>"Иван Иванов","password"=>"password"]);
        $seller->set_role(1);
        $user->set_session();
        var_dump($user);
    }
    function role($id){
        $user = User::get_session();
        $user->set_role($id);
        return redirect()->to("/account");
    }
    function test_auth(){
        $user = User::get_session();
        var_dump($user);
    }
	//--------------------------------------------------------------------

}
