<?php namespace App\Controllers;

class Project extends BaseController
{
	public function index()
    {
        session_start();
        return view('project_view');

    }

	public function add()
    {
        session_start();
        return view('add_project_view');
    }


}
