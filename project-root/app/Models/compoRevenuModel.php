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
        /*
        $compo["Produit brut"]=$a->part_pb_exploitation;
        $compo["Apport financier"]=$a->part_apport_financier;
        $compo["Activite exp"]=$a->part_autre_act_exp;
        $compo["Activite personne"]=$a->part_autre_act_pers;
        $compo["title"]="Composition des revenus";*/




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
        //$compo = preg_replace('/"([a-zA-Z_]+[a-zA-Z0-9_]*)":/','$1:',$compo);
        //dd($compo);

       // dd($compo);

        //dd($compo);
       // $compo["Activite"]=$a->part_autre_act_agr_pers;
        //$compo["produit_brut"]=$a->part_autre_act_nagr_pers;


        //Création des jeux de données pour les pie chart
        /*var input = [
            {name: "Vente", size: "1000"},
            {name: "Apport financier", size: "200"},
            {name: "Revenu non agricole", size: "300"}
        ]
        input.title = "Composition des revenus"*/

        return $compo;
    }



    public function getPerfs()
    {
        $perfs=$this->findColumn('performance');
        return $perfs;
    }



}




