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
    $i=0;
    if(isset($arr['profil'])){
        while (isset($arr['profil'][$i])){
                $i++;
            }

            for($k=$i; $k<=$i; $k++) {
                for ($j = 0; $j < $i; $j++) {
                    $arr['profil'][$k++]=$arr['profil'][$j]. ', chercheur';
                    $arr['profil'][$k++]=$arr['profil'][$j]. ', decideur';
                    $arr['profil'][$k++]=$arr['profil'][$j]. ', agence de developpement';
                    $arr['profil'][$k++]=$arr['profil'][$j]. ', producteur';
                    $arr['profil'][$k++]='producteur, ' . $arr['profil'][$j];
                    $arr['profil'][$k++]='decideur, ' . $arr['profil'][$j];
                    $arr['profil'][$k]='agence de developpement, ' . $arr['profil'][$j];

                }
            }

            $users = $this->db->table('users')
                ->whereIn('user_profile', $arr['profil'])
                //->orWhereIn($arr['profil'],'user_profile' ) ne trouve pas des personnes possédant plusieurs types de profil
                ->get()->getResult();

        }
        elseif(isset($_SESSION['login'])){
            $users = $this->db->table('users')->whereNotIn('login', [$_SESSION['login']])->get()->getResult();
            //$users=$this->db->table('users')->get()->getResult();
        }
        else {
            $users=$this->db->table('users')->get()->getResult();
        }

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



