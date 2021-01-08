<?php

namespace App\Models;

use CodeIgniter\Model;

class APImodel extends Model
{
    protected $table = 'vue_api';
    protected $primaryKey = 'exploitation, annee_observation';

    //protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['produit_brut', "consommation_intermediaire","apport_financier","temps_travail","surface","capital"];





}




