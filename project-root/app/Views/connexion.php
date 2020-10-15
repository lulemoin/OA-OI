<?php $title = 'Connexion'; ?>
<?php $navigations=["Accueil"=>"/OA-OI_git/project-root/public/data","Données"=>"/OA-OI_git/project-root/public/Observatory"]; ?>


<?php ob_start(); ?>
<h1>Bienvenue sur l'observatoire</h1>

<br>

<h2>Connectez-vous pour voir votre profil</h2>

<form action='/OA-OI_git/project-root/public/dashboard' method="post">

    <div class="form-row col-sm-10">
        <label for="inputLogin col-sm-2 col-form-label">Login</label>
        <input name="login" type="text" class="form-control " id="inputLogin">
    </div>
    <div class="form-row col-md-10">
        <label for="inputPassword col-sm-2 col-form-label">Mot de passe</label>
        <input name="password" type="password" class="form-control" id="inputPassword">
    </div>
    <div>
        <p><input type="submit" value="Valider"></p>
    </div>
</form>

<h4>Sinon, vous pouvez aussi <a href='/OA-OI_git/project-root/public/register'> créer votre compte</a></h4>

<h4>... Ou même <a href='/OA-OI_git/project-root/public/data'> entrer sans connexion ! </a></h4>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
