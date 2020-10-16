<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    session_start();
	    $_SESSION['user_profile']=null;
        $_SESSION['login']=null;

		return view('connexion_view',['login'=>0]);
	}


}
