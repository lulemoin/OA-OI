<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    //protected $returnType = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['user_profile', 'prenom', 'nom', 'email', 'ville','mot_de_passe'];

    //protected $useTimestamps = false;
    //protected $createdField = 'created_at';
    //protected $updatedField = 'updated_at';
    //protected $deletedField = 'deleted_at';

    //protected $validationRules = [];
    //protected $validationMessages = [];
    //protected $skipValidation = false;


    public function checkIt()
    {
        echo '<p>vérification en cours </p>';
    }
}



