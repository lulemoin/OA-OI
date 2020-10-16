<?php namespace App\Controllers;

use App\Models\UsersModel;
use phpDocumentor\Reflection\Location;

class Dashboard extends BaseController
{

    public function create()
    {
        session_start();
        if ($this->request->getMethod()=="post")
        {
            $um = new UsersModel();

            if($um->alreadyExists($_POST['login'])){
                echo '<p>Ce login existe déjà !</p>';
                return view('register_view');
            }

            else {

                try {
                    $um->save($_POST);
                } catch (\Exception $e) {
                    $e->getMessage();
                }
                $_SESSION['connected'] = true;
                $_SESSION['user_profile'] = $_POST['user_profile'][0];

                if ($_SESSION['user_profile'] == 'Producteur') {
                    echo '<p>Producteur dashboard</p>';
                } else if ($_SESSION['user_profile'] == 'Agence de développement') {
                    echo '<p>Agence de développement dashboard</p>';
                } else if ($_SESSION['user_profile'] == 'Décideur') {
                    echo '<p>Décideur dashboard</p>';
                }

                return view('dashboard_view');
            }
        }
        else {
                return "<p>Utiliser le formulaire !</p>";
        }
    }

	public function index()
	{
        session_start();
        if ($this->request->getMethod()=="post")
        {
            $_SESSION['connected'] = true;
            $um = new UsersModel();
            $um->checkIt($_POST['login'],$_POST['password']);
        }

	    return view('dashboard_view');
	}






	public function exploitation($type, $price)
    {
        echo '<h2> This is an exploitation of type : '.$type .'</br> it costs'. $price.'</h2>';

	    //return view('exploitation');

    }
	//--------------------------------------------------------------------

}

