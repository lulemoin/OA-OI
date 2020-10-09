<?php namespace App\Controllers;

use function App\Models\checkIt;

class Dashboard extends BaseController
{

	public function index()
	{
        checkIt();
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

