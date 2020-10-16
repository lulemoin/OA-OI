<?php namespace App\Controllers;

class Project extends BaseController
{
	public function index()
	{
	    session_start();
		return view('project_view');
	}


}
