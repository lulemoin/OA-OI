<?php namespace App\Controllers;

use App\Models\UsersModel;
use phpDocumentor\Reflection\Location;

class Deconnexion extends BaseController
{


	public function index()
	{
        session_start();
        return view('deconnexion_view');
	}

	public function end(){
        session_start();
	    session_destroy();
	    return view('connexion_view');

    }






	public function exploitation($type, $price)
    {
        echo '<h2> This is an exploitation of type : '.$type .'</br> it costs'. $price.'</h2>';

	    //return view('exploitation');

    }
	//--------------------------------------------------------------------

}

