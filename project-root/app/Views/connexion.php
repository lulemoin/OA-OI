<?php $title = 'Connexion'; ?>
<?php $navigations=["Accueil"=>"/OA-OI_git/project-root/public/data","Données"=>"/OA-OI_git/project-root/public/Observatory"]; ?>


<?php ob_start(); ?>
<h1>Bienvenue sur l'observatoire</h1>

<br>

<h2>Connectez-vous pour voir votre profil</h2>

<form action='/OA-OI_git/project-root/public/dashboard' method="post">

    <p><label for="pseudo"> Pseudo</label><input type="text" name="pseudo" id="pseudo"/></p>
    <p><label for="password"> Password</label><input type="password" name="password" id="password"/</p>
    <p><input type="submit" value="Valider"></p>

</form>

<h4>Sinon, vous pouvez aussi <a href='/OA-OI_git/project-root/public/register'> créer votre compte</a></h4>

<h4>... Ou même <a href='/OA-OI_git/project-root/public/data'> entrer sans connexion ! </a></h4>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
