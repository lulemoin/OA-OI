<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    //protected $returnType = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['login', 'user_profile', 'prenom', 'nom', 'email', 'ville', 'mot_de_passe'];

    //protected $useTimestamps = false;
    //protected $createdField = 'created_at';
    //protected $updatedField = 'updated_at';
    //protected $deletedField = 'deleted_at';

    //protected $validationRules = [];
    //protected $validationMessages = [];
    //protected $skipValidation = false;


    public function alreadyExists($login)
    {
        if($this->db->table('users')->where(['login'=>$login])->get()->getRow()==null)
        return false;

        else{
            return true;
        }

    }



    public function checkIt($login, $password)
    {

        $user=$this->db->table('users')->where(['login'=>$login])->get()->getRow();

        if($user==null){
            return 0;

        } else if($user!=null && $password==$user->mot_de_passe){

            $_SESSION['connected']=true;
            $_SESSION['user_profile']=$user->user_profile;
            return true;
        }
        else {
            return 2;
        }

    }
}



