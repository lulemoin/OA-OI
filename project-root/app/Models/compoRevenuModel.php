<?php

namespace App\Models;

use CodeIgniter\Model;

class compoRevenuModel extends Model
{
    protected $table = 'composition_revenu_total';
    protected $primaryKey = 'code_exp, annee_observation';

    //protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['exploitation', 'annee_observation', 'total_revenu', "part_pb_exploitation","part_apport_financier","part_autre_act_exp","part_autre_act_pers","part_autre_act_agr_pers","part_autre_act_nagr_pers"];

    //protected $useTimestamps = false;
    //protected $createdField = 'created_at';
    //protected $updatedField = 'updated_at';
    //protected $deletedField = 'deleted_at';
    //protected $validationRules = [];
    //protected $validationMessages = [];
    //protected $skipValidation = false;


    public function getCompo($code_exp, $annee_observation=2015)
    {
        $a=$this->db->table('composition_revenu_total')
            ->where(['exploitation'=>$code_exp])
            ->where(['annee_observation'=>$annee_observation])
            ->get()->getRow();


        $compo1["name"]="Produit brut";
        $compo1["size"]=round($a->part_pb_exploitation);
        $compo2["name"]="Apport financier";
        $compo2["size"]=round($a->part_apport_financier);
        $compo3["name"]="Activite exp";
        $compo3["size"]=round($a->part_autre_act_exp);
        $compo4["name"]="Activite personne";
        $compo4["size"]=round($a->part_autre_act_pers);
        $compo=array($compo1, $compo2, $compo3, $compo4);
        $compo = json_encode($compo);//, JSON_NUMERIC_CHECK);


        return $compo;
    }



    public function getPerfs()
    {
        $perfs=$this->findColumn('performance');
        return $perfs;
    }



}




