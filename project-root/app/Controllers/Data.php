<?php namespace App\Controllers;


class Data extends BaseController
{

	public function index()
	{
        session_start();
	    return view('data_view');
	}


}

