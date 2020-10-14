<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    session_start();
	    //if connected return tableau de bord
        //else return connexion
		return view('connexion');
	}


}
