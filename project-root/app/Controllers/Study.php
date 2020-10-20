<?php namespace App\Controllers;

class Study extends BaseController
{
	public function index()
	{
        session_start();
        return view('study_view');
	}

	public function add()
    {
        session_start();
        helper('form');
        $data=[];

        if($this->request->getMethod()=='post')
        {
            $rules = [
                'speaks'=>"uploaded[speaks]"
            ];

            if($this->validate($rules)){
                return redirect()->to('/OA-OI_git/project-root/public/Study');
            }
            else{
                $data['validation']=$this->validator;
            }
        }
        return view('add_study_view', $data);

    }

}
