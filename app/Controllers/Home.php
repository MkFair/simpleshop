<?php namespace App\Controllers;
use App\Libraries\User;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
    function test_user(){
        
        $user = User::create(["email"=>"admin@admin.com","fio"=>"Иван Иванов","password"=>"password"]);
        $user->set_session();
        var_dump($user);
    }
    function test_auth(){
        $user = User::get_session();
        var_dump($user);
    }
	//--------------------------------------------------------------------

}
