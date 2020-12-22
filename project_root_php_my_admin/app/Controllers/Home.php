<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    session_start();
	    $_SESSION['user_profile']=null;
        $_SESSION['login']=null;
        $_SESSION['connected']=false;

		return view('connexion_view',['login'=>0]);
	}


}
