<?php namespace App\Controllers;

use App\Models\UserModel;

class Zone extends BaseController
{

	public function index()
	{
        session_start();
	    return view('zone_view');
	}


}

