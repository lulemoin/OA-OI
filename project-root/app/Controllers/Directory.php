<?php namespace App\Controllers;

use App\Models\UsersModel;

class Directory extends BaseController
{

	public function index()
	{
        session_start();
        return view('directory_view');
	}

public function research(){
    session_start();
    $um = new UsersModel();
    $data = $um->research();

    //dd($data);
    return view("directory_view", $data);
}

}

