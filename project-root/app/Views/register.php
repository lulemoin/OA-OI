<?php $title = 'Register'; ?>
<?php $navigations = ["Accueil" => "/OA-OI_git/project-root/public/data", "Données" => "/OA-OI_git/project-root/public/Observatory"]; ?>


<?php ob_start(); ?>
<h2>Inscrivez-vous</h2>
<br>


<!-- Mettre des exemples de profil à sélectionner -->
<div>
    <form action="/OA-OI_git/project-root/public/dashboard/create" method="post">

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Type de profil</legend>
                <div class="col-sm-10">
                    <div class="form-check" name="user_profile">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios1"
                               value="Producteur" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Producteur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios2"
                               value="Agence de développement">
                        <label class="form-check-label" for="gridRadios2">
                            Agence de développement
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios3"
                               value="Décideur">
                        <label class="form-check-label" for="gridRadios3">
                            Décideur politique
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-row col-sm-10">
            <label for="inputSurname col-sm-2 col-form-label">Prénom</label>
            <input name="prenom" type="text" class="form-control " id="inputSurame">
        </div>
        <div class="form-row col-md-10">
            <label for="inputName col-sm-2 col-form-label">Nom</label>
            <input name="nom" type="text" class="form-control" id="inputName">
        </div>
        <div class="form-row col-md-10">
            <label for="inputEmail col-sm-2 col-form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail">
        </div>
        <div class="form-row col-md-10">
            <label for="inputCity col-sm-2 col-form-label">Ville</label>
            <input name="ville" type="text" class="form-control" id="inputCity">
        </div>
        <!--
        </div>
            <div class="col-md-4">
                <label for="inputState">Pays</label>
                <select name="pays" id="inputState" class="form-control">
                    <option selected>France</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Code postal</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>-->

        <div class="form-row col-sm-8">
            <label for="inputLogin col-sm-3 col-form-label">Login</label>
            <input name="login" type="text" class="form-control " id="inputLogin">
        </div>

        <div class="form-row col-sm-8">
            <label name="mot_de_passe" for="inputPassword3" class="col-sm-3 col-form-label">Mot de passe</label>
            <div class="col-sm-10">
                <input name="mot_de_passe" type="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="form-row col-sm-8">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Confirmer le mot de passe</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
            </div>
        </div>

        <div class="form-row col-md-10">
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Se souvenir de moi
                    </label>
                </div>
            </div>
        </div>
        <div class="form row col-md-2">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Créer le compte</button>
            </div>
        </div>
    </form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
