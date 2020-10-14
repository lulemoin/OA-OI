<?php $title = 'Register'; ?>
<?php $navigations=["Accueil"=>"/OA-OI_git/project-root/public/data","Données"=>"/OA-OI_git/project-root/public/Observatory"]; ?>


<?php ob_start(); ?>
<h2>Inscrivez-vous</h2>
<br>

<h4>Choisissez votre profil</h4>
<!-- Mettre des exemples de profil à sélectionner -->



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
