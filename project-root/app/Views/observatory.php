<?php $title = 'Register'; ?>
<?php $navigations=["Accueil"=>"/OA-OI_git/project-root/public/data","Données"=>"/OA-OI_git/project-root/public/Observatory"]; ?>


<?php ob_start(); ?>
<h2> Here i am </h2>
<h3>Let's see what's going on</h3>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
