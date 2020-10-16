<?php namespace App\Controllers;


class Register extends BaseController
{

	public function index()
	{
        session_start();
	    return view('register_view');
	}

}

