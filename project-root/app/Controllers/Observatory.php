<?php namespace App\Controllers;

class Observatory extends BaseController
{
	public function index()
	{
		return view('observatory');
	}

	public function exploitation($type, $price)
    {
        echo '<h2> This is an exploitation of type : '.$type .'</br> it costs'. $price.'</h2>';

	    //return view('exploitation');

    }
	//--------------------------------------------------------------------

}
