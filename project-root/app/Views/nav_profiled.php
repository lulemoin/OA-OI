<?php

if($_SESSION['user_profile']==null){
    $navs=[
        "Data"=>"/OA-OI_git/project-root/public/Data",
        "Créer mon compte"=>"/OA-OI_git/project-root/public/Register",
        "Connexion"=>"/OA-OI_git/project-root/public/Home"
    ];
}

else if($_SESSION['user_profile']=='Producteur') {
    $navs = [
        "Data" => "/OA-OI_git/project-root/public/Data",
        "Tableau de bord" => "/OA-OI_git/project-root/public/Dashboard",
        "Mon exploitation" => "/OA-OI_git/project-root/public/Exploitation",
        "Déconnexion"=>"/OA-OI_git/project-root/public/Deconnexion"
    ];
}

else if($_SESSION['user_profile']=='Agence de développement') {
    $navs = [
        "Data" => "/OA-OI_git/project-root/public/Data",
        "Mes projets" => "/OA-OI_git/project-root/public/Projet",
        "Déconnexion"=>"/OA-OI_git/project-root/public/Deconnexion"
    ];
}

else if($_SESSION['user_profile']=='Décideur'){
    $navs=[
        "Data"=>"/OA-OI_git/project-root/public/Data",
        "Le territoire"=>"/OA-OI_git/project-root/public/Zone",
        "Déconnexion"=>"/OA-OI_git/project-root/public/Deconnexion"
    ];
}
else dd($_SESSION);


?>
