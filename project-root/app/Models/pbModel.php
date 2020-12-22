<?php

namespace App\Models;

use CodeIgniter\Model;

class pbModel extends Model
{
    protected $table = 'pb_exploitation';
    protected $primaryKey = 'code_exp, annee_observation';

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
        $a = $this->db->table('pb_exploitation')
                ->where(['exploitation' => $code_exp])
                //->where(['annee_observation'=>$annee_observation])
        ->get()->getRow();

        return ($a->pb);
    }


    public function getPerfs()
    {
        $perfs = $this->findColumn('performance');
        return $perfs;
    }


}







