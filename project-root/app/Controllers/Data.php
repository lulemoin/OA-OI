<?php namespace App\Controllers;

use App\Models\UserModel;

class Data extends BaseController
{

	public function index()
	{
        session_start();
	    return view('data_view');
	}


}

