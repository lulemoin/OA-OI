<?php namespace App\Controllers;


class Register extends BaseController
{

	public function index()
	{
        session_start();
        helper('form');
        $data=['doublon'=>0];
	    return view('register_view',  $data);
	}

}
