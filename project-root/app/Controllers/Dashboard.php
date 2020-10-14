<?php namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function create()
    {
        if ($this->request->getMethod()=="post")
        {
            $um = new UserModel();
            $um->save($_POST);
            return view('dashboard');
        }
        return "<p>Utiliser le formulaire !</p>";
    }

	public function index()
	{
        $um= new UserModel();
        $um->checkIt();

	   //checkIt($_POST['pseudo'],$_POST['password']);
		/*if($validated)
        {

        }*/
	    return view('dashboard');
	}

	public function exploitation($type, $price)
    {
        echo '<h2> This is an exploitation of type : '.$type .'</br> it costs'. $price.'</h2>';

	    //return view('exploitation');

    }
	//--------------------------------------------------------------------

}

