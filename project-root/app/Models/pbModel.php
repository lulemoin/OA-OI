<?php

namespace App\Models;

use CodeIgniter\Model;

class pbModel extends Model
{
    protected $table = 'pb_exploitation';
    protected $primaryKey = 'code_exp';

    //protected $returnType = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['exploitation', 'pb', 'annee_observation'];

    //protected $useTimestamps = false;
    //protected $createdField = 'created_at';
    //protected $updatedField = 'updated_at';
    //protected $deletedField = 'deleted_at';
    //protected $validationRules = [];
    //protected $validationMessages = [];
    //protected $skipValidation = false;


    public function getPb($code_exp)
    {
        $a=$this->db->table('pb_exploitation')->where(['exploitation'=>$code_exp])->get()->getRow();

            dd($a->pb);
    }

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
    public function getPerfs()
    {
        $perfs=$this->findColumn('performance');
        return $perfs;
    }



    }





