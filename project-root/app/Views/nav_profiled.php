<?php if($_SESSION['user_profile']==null){
    $navs=[
        "OA-OI"=>"/OA-OI_git/project-root/public/Observatory",
        "Data"=>"/OA-OI_git/project-root/public/Data",
        "Créer mon compte"=>"/OA-OI_git/project-root/public/Register",
        "Connexion"=>"/OA-OI_git/project-root/public/Home"
    ];
}

if($_SESSION['user_profile']=='Producteur') {
    $navs = [
        "OA-OI" => "/OA-OI_git/project-root/public/Observatory",
        "Data" => "/OA-OI_git/project-root/public/Data",
        "Tableau de bord" => "/OA-OI_git/project-root/public/Dashboard",
        "Mon exploitation" => "/OA-OI_git/project-root/public/Exploitation",
    ];
}

if($_SESSION['user_profile']=='Agence de développement') {
    $navs = [
        "OA-OI" => "/OA-OI_git/project-root/public/observatory",
        "Data" => "/OA-OI_git/project-root/public/Observatory",
        "Mes projets" => "/OA-OI_git/project-root/public/Projet",
    ];
}

if($_SESSION['user_profile']=='Décideur'){
    $navs=[
        "OA-OI"=>"/OA-OI_git/project-root/public/observatory",
        "Data"=>"/OA-OI_git/project-root/public/Observatory",
        "Le territoire"=>"/OA-OI_git/project-root/public/Zone",
    ];
}
