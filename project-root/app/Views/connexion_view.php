<?php $title = 'Connexion'; ?>
<?php $navigations=["Accueil"=>"/OA-OI_git/project-root/public/data","Données"=>"/OA-OI_git/project-root/public/Observatory"]; ?>

<?php ob_start(); ?>
<h2 class="mt-2">Bienvenue sur l'observatoire des agricultures de l'océan Indien</h2>
</br>

<h3 class="mt-3">Connectez-vous pour voir votre profil</h3>

<form action='/OA-OI_git/project-root/public/dashboard' method="post">

    <div class="form-row col-md-8 mt-4">
        <label for="inputLogin col-sm-2 col-form-label">Login</label>
        <input name="login" type="text" class="form-control " id="inputLogin">
    </div>
    <div class="form-row col-md-8 mt-2">
        <label for="inputPassword col-sm-2 col-form-label">Mot de passe</label>
        <input name="password" type="password" class="form-control" id="inputPassword">
    </div>
    <div class="form-row col-md-5 mt-3">
        <p><input class="btn btn-success" type="submit" value="Valider"></p>
    </div>
</form>

<div class="container">
    <h5>Sinon, vous pouvez aussi <a href='/OA-OI_git/project-root/public/register'> créer votre compte</a></h5>

    <h5>... Ou même <a href='/OA-OI_git/project-root/public/data'> entrer sans connexion ! </a></h5>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
