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

    public function researchA($arr)
    {
       /* if(isset($arr['profil']))
        {
            echo print_r($arr['profil']);
            dd($arr['profil']);
            $users=$this->db->table('users')->where(['user_profile'=>])
        }*/
        dd($_SESSION);
        $users=$this->db->table('users')->whereNotIn('login',[$_SESSION['login']])->get()->getResult();
        //$users=$this->db->table('users')->get()->getResult();
        $rep=[];
        $i=0;
        foreach($users as $user)
        {
            if($this->checkRight($user)){
                $rep["users"][$i++]=[$i, $user->nom,$user->prenom, $user->user_profile,$user->ville];
            }
        }
        return $rep;
    }

    public function researchP()
    {
        $users=$this->db->table('users')->get()->getResult();
        $rep=[];
        $i=0;
        foreach($users as $user)
        {
            if($this->checkRight($user)){
                $rep["users"][$i++]=[$i, $user->nom,$user->prenom, $user->user_profile,$user->ville];
            }
        }
        return $rep;
    }

    public function checkRight($user)
    {
        return true;
    }
}



