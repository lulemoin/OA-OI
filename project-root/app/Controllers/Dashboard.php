<?php namespace App\Controllers;

use App\Models\compoRevenuModel;
use App\Models\UsersModel;
use phpDocumentor\Reflection\Location;
use App\Models\pbModel;

class Dashboard extends BaseController
{



	public function index()
    {
        session_start();
        $pbm=new pbModel();
        $pb=$pbm->getPb(10000);
        $cm = new compoRevenuModel();
        $compo=$cm->getCompo(10000);
        $data=array('pb'=>$pb, 'compo'=>$compo);
        return view('dashboard_view',$data);
    }


	public function exploitation()
    {
        session_start();
        return view('exploitation_view');

    }
	//--------------------------------------------------------------------

}

