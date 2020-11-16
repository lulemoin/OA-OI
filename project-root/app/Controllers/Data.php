<?php namespace App\Controllers;

use App\Models\UsersModel;

class Data extends BaseController
{

	public function index()
	{
        session_start();
        $um = new UsersModel();
        $perfs=$um->getPerfs();
	    return view('data_view', ["moy_perf"=>array_sum($perfs)/count($perfs)]);
	}


}

