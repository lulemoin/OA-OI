<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>

<?php if($login==1): ?>

    <div class="mt-3 alert alert-danger" role="alert">
        Le login n'est associé à aucun compte !
    </div>

<?php endif; ?>

<?php if($login==2): ?>

    <div class="mt-3 alert alert-danger" role="alert">
        Le mot de passe est incorrect !
    </div>

<?php endif; ?>


<p class="text-center display-4">Bienvenue sur l'observatoire</p>
</br>

<p class="text-center mt-3 lead">Connectez-vous pour voir votre profil</p>

<form action='/OA-OI_git/project-root/public/home/connection' method="post" class="justify-content-center">

    <div class="row justify-content-center">
        <div class="form-row mt-4 col-md-6">
            <label for="inputLogin col-sm-2 col-form-label">Login</label>
            <input name="login" type="text" class="form-control " id="inputLogin">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="form-row mt-2 col-md-6">
            <label for="inputPassword col-sm-2 col-form-label">Mot de passe</label>
            <input name="password" type="password" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="form-row mt-3 justify-content-center">
        <p><input class="btn btn-success" type="submit" value="Valider"></p>
    </div>
</form>

<div class="container text-center">
    <p>Sinon, vous pouvez aussi <a href='/OA-OI_git/project-root/public/register'> créer votre compte</a></p>

    <p>... Ou même <a href='/OA-OI_git/project-root/public/data'> entrer sans connexion ! </a></p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>
