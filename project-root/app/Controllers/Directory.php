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
    $rep = $um->research($_SESSION['login']);
    return view("directory_view",$rep);
}

}

