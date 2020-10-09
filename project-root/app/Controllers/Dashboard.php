<?php namespace App\Controllers;

use namespace App\Models;

class Dashboard extends BaseController
{

	public function index()
	{

        checkIt($_POST['pseudo'],$_POST['password']);
	   //checkIt($_POST['pseudo'],$_POST['password']);
		/*if($validated)
        {

        }*/
	    return view('observatory');
	}

	public function exploitation($type, $price)
    {
        echo '<h2> This is an exploitation of type : '.$type .'</br> it costs'. $price.'</h2>';

	    //return view('exploitation');

    }
	//--------------------------------------------------------------------

}

