<?php namespace App\Controllers;

class Account extends BaseController
{
	public function index()
	{
	    //if connected return account
        //else return register
		return view('account');
	}
	

}
