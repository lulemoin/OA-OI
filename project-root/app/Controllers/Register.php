<?php namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{

	public function index()
	{
        session_start();
        helper('form');
        $data=['doublon'=>0];
	    return view('register_view',  $data);
	}

    public function create()
    {
        session_start();

        if(isset($_POST['user_profile'][1])) {
            $_POST['user_profile'] = $_POST['user_profile'][0] . ", " . $_POST['user_profile'][1];
        }else{
            $_POST['user_profile'] = $_POST['user_profile'][0];
        }


        if ($this->request->getMethod()=="post")
        {
            $um = new UsersModel();

            if($um->alreadyExists($_POST['login'])){
                return view('register_view', ['doublon'=>1]);
            }
            else {

                try {
                    $um->save($_POST);
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
                $_SESSION['connected'] = true;
                $_SESSION['user_profile'] = $_POST['user_profile'];
                $_SESSION['login']=$_POST['login'];
;
                return redirect()->to("/OA-OI_git/project-root/public/dashboard");
            }
        }
        else {
            return view('register_view');
        }
    }

}

