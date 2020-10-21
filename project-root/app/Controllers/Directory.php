<?php namespace App\Controllers;

use App\Models\UsersModel;

class Directory extends BaseController
{

	public function index()
	{
        session_start();
        return view('directory_view');
	}

public function researchA(){
    session_start();
    $um = new UsersModel();
    $data = $um->researchA($_POST);

    return view("directory_view", $data);
}

    public function researchP(){
        session_start();
        $um = new UsersModel();
        $data = $um->researchP();

        return view("directory_view", $data);
    }

}

