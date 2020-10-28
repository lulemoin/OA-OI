<?php

$navs=[];

$navs["Data"] = "/OA-OI_git/project-root/public/Data";

if ($_SESSION['user_profile'] == null) {
    $navs = [
        "Créer mon compte" => "/OA-OI_git/project-root/public/Register",
        "Connexion" => "/OA-OI_git/project-root/public/Home"
    ];
} else {

    if (strpos($_SESSION['user_profile'] ,'producteur')!==false) {
        $navs ["Tableau de bord"] = "/OA-OI_git/project-root/public/Dashboard";
        $navs["Mon exploitation"] = "/OA-OI_git/project-root/public/Dashboard/exploitation";

    } if (strpos($_SESSION['user_profile'],'agence de developpement')!==false) {
        $navs ["Mes projets"]="/OA-OI_git/project-root/public/Project";

    } if (strpos($_SESSION['user_profile'],'decideur')!==false) {
        $navs["Le territoire"]= "/OA-OI_git/project-root/public/Zone";

    } if (strpos($_SESSION['user_profile'], 'chercheur')!==false) {
        $navs ["Etudes"] = "/OA-OI_git/project-root/public/Study";

    }
    $navs['Déconnexion'] = "/OA-OI_git/project-root/public/Deconnexion";


}

$navs['Annuaire']="/OA-OI_git/project-root/public/Directory";



?>
