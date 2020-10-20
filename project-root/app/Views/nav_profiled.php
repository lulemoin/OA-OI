<?php
//$navs=["OA-OI"=>"/OA-OI_git/project-root/public/Observatory"];

if($_SESSION['user_profile']==null){
    $navs=[
        "Data"=>"/OA-OI_git/project-root/public/Data",
        "Créer mon compte"=>"/OA-OI_git/project-root/public/Register",
        "Connexion"=>"/OA-OI_git/project-root/public/Home"
    ];
}

else if($_SESSION['user_profile']=='producteur') {
    $navs = [
        "Data" => "/OA-OI_git/project-root/public/Data",
        "Tableau de bord" => "/OA-OI_git/project-root/public/Dashboard",
        "Mon exploitation" => "/OA-OI_git/project-root/public/Dashboard/exploitation",
        "Déconnexion"=>"/OA-OI_git/project-root/public/Deconnexion"
    ];
}

else if($_SESSION['user_profile']=='agence de developpement') {
    $navs = [
        "Data" => "/OA-OI_git/project-root/public/Data",
        "Mes projets" => "/OA-OI_git/project-root/public/Project",
        "Déconnexion"=>"/OA-OI_git/project-root/public/Deconnexion"
    ];
}

else if($_SESSION['user_profile']=='decideur'){
    $navs=[
        "Data"=>"/OA-OI_git/project-root/public/Data",
        "Le territoire"=>"/OA-OI_git/project-root/public/Zone",
        "Déconnexion"=>"/OA-OI_git/project-root/public/Deconnexion"
    ];
}

else if($_SESSION['user_profile']=='chercheur'){
    $navs=[
        "Data"=>"/OA-OI_git/project-root/public/Data",
        "Etudes"=>"/OA-OI_git/project-root/public/Study",
        "Déconnexion"=>"/OA-OI_git/project-root/public/Deconnexion"
    ];

}

else dd($_SESSION);


?>
