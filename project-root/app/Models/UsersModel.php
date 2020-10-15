<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    //protected $returnType = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['login', 'user_profile', 'prenom', 'nom', 'email', 'ville','mot_de_passe'];

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
        echo '<p>vérification en cours </p>';
        $user=$this->find($login);


        if($user==null){
            echo '<p> Ce login n\'est pas enregistré dans la base de données, veuillez 
                    <a href="/OA-OI_git/project-root/public/register"> créer votre compte</a>  ou
                    <a href="/OA-OI_git/project-root/public/data"> entrer sans connexion ! </a></p>';
        }

        if($user!=null && $password==$user['mot_de_passe'])
        {
            echo '<p>'. $login .' </p>';
            $_SESSION['connected']=true;
            $_SESSION['user_profile']=$user['user_profile'];
        }
        else {
            echo '<p> Le mot de passe et le login ne correspondent pas ! </p>';
            dd($_SESSION);
        }

    }
}



