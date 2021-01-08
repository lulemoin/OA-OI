<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\APImodel;


class API extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
        $model = new APImodel();
        $data['exploitations'] = $model->orderBy('exploitation', 'DESC')->findAll();
        return $this->respond($data);
    }


    // single user
    public function getExploitation($id = null){
        $model = new APImodel();
        $data = $model->where('exploitation', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No exploitation found');
        }
    }

}
