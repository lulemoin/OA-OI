<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    session_start();
	    $_SESSION['user_profile']=null;
        $_SESSION['login']=null;
	    //if connected return tableau de bord
        //else return connexion
		return view('connexion_view');
	}


}
