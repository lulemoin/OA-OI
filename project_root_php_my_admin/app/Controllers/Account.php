<?php namespace App\Controllers;

class Account extends BaseController
{
	public function index()
	{
        session_start();
	    //if connected return account
        //else return register
		return view('account_view');
	}
	

}
