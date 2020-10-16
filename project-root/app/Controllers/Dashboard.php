<?php namespace App\Controllers;

use App\Models\UsersModel;
use phpDocumentor\Reflection\Location;

class Dashboard extends BaseController
{

    public function create()
    {
        session_start();
        $_POST['user_profile']=$_POST['user_profile'][0];
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
                    $e->getMessage();
                }
                $_SESSION['connected'] = true;
                $_SESSION['user_profile'] = $_POST['user_profile'];

                return view('dashboard_view');
            }
        }
        else {
                return view('register_view');
        }
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
                return view('dashboard_view');

            }else {//le login existe mais le mot de passe n'est pas bon
                return view('connexion_view',['login'=>2]);

            }
        }

	}

	public function index()
    {
        session_start();
        return view('dashboard_view');

    }


	public function exploitation()
    {
        session_start();
        return view('exploitation_view');

    }
	//--------------------------------------------------------------------

}

