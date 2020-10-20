<?php $title = 'Register'; ?>

<?php ob_start(); ?>

<?php if($doublon==1): ?>

    <div class="alert alert-danger mt-2" role="alert">
        Ce login existe déjà !
    </div>

<?php endif; ?>


<!-- Mettre des exemples de profil à sélectionner -->

<div class="col-md justify-content-center">
    <h2 class="mb-4 display-4 text-center">Inscrivez-vous</h2>
    <form class="col-md-12" action="/OA-OI_git/project-root/public/Dashboard/create" method="post">

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-3 pt-0 mb-2">Type de profil</legend>
                <div class="col-sm-10">
                    <div class="form-check" name="user_profile">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios1"
                               value="producteur" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Producteur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios2"
                               value="agence de developpement">
                        <label class="form-check-label" for="gridRadios2">
                            Agence de développement
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios2"
                               value="chercheur">
                        <label class="form-check-label" for="gridRadios2">
                            Chercheur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios3"
                               value="decideur">
                        <label class="form-check-label" for="gridRadios3">
                            Décideur politique
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-row mt-2">
            <div class="from-group col-md-5">
                <label for="inputSurname col-form-label">Prénom</label>
                <input name="prenom" type="text" class="form-control" id="inputSurame" placeholder="Marie">
            </div>
            <div class="from-group col-md-7">
                <label for="inputName col-form-label">Nom</label>
                <input name="nom" type="text" class="form-control" id="inputName" placeholder="Hoarau">
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="inputEmail col-form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail">
        </div>
        <div class="form-row mt-2">
            <div class="form-group col-md-8">
                <label for="inputCitycol-form-label">Ville</label>
                <input name="ville" type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Pays</label>
                <select name="pays" id="inputState" class="form-control">
                    <option selected>France</option>
                    <option>...</option>
                </select>
            </div>
        </div>

<!--
<div class="form-group col-md-2">
<label for="inputZip">Code postal</label>
<input type="text" class="form-control" id="inputZip">
</div>
</div>-->

        <div class="form-group mt-5">
            <label for="inputLogin col-form-label">Login</label>
            <input name="login" required="required" type="text" class="form-control " id="inputLogin">
        </div>

        <div class="form-group mt-2">
            <label name="mot_de_passe" for="inputPassword3 col-form-label">Mot de passe</label>
            <input name="mot_de_passe" type="password" class="form-control" id="inputPassword3">
        </div>
        <div class="form-group mt-2">
            <label for="inputPassword3 col-form-label">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="inputPassword3">
        </div>

        <div class="form-group mt-2">
            <div class="form-check">
                <input class="form-check-input " type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Se souvenir de moi
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Créer le compte</button>
    </form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
