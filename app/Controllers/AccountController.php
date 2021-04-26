<?php
namespace App\Controllers;

class AccountController extends BaseController{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
        
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
        $sess = session();
        $user = $sess->get("user");
        if( \App\Libraries\User::check_role(1,$user["id"]) )
            $this->data["user_info"] = $this->current_user = \App\Libraries\User::get_session();
        else
            $this->data["user_info"] = $this->current_user = \App\Libraries\Seller::get_session();
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}
    
}
