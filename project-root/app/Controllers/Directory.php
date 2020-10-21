<?php namespace App\Controllers;

use App\Models\UserModel;

class Directory extends BaseController
{

	public function index()
	{
        session_start();
	    return view('directory_view');
	}


}

