<?php namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
	public function index()
	{
	    session_start();
	    $_SESSION['user_profile']=null;
        $_SESSION['login']=null;
        $_SESSION['connected']=false;

		return view('connexion_view',['login'=>0]);
	}

    public function connection()
    {
        session_start();
        if ($this->request->getMethod()=="post")
        {
            $_SESSION['connected'] = true;
            $um = new UsersModel();
            $rep=$um->checkIt($_POST['login'],$_POST['password']);

            if($rep==0){// le login n'existe pas
                return view('connexion_view',['login'=>1]);

            }else if($rep==1){//c'est bon !
                $_SESSION['login']=$_POST['login'];
                return redirect()->to('/OA-OI_git/project-root/public/dashboard');

            }else {//le login existe mais le mot de passe n'est pas bon
                return view('connexion_view',['login'=>2]);

            }
        }

    }

}
