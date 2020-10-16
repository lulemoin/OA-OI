<?php namespace App\Controllers;

class Observatory extends BaseController
{
	public function index()
	{
        session_start();
        return view('observatory_view');
	}


}
