<?php $title = 'Add_study'; ?>

<?php ob_start(); ?>

<!-- Mettre des exemples de profil à sélectionner -->
<div class="container col-md-12 justify-content-center">
    <p class="display-4 mb-4 text-center">L'étude</p>


    <?php if(isset($validation)): ?>
        <div class="alert alert-danger my-2">
            Merci d'insérer un fichier
        </div>

    <?php endif; ?>


    <form class="col-md" action="/OA-OI_git/project-root/public/Study/add" method="post" enctype="multipart/form-data">

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-3 pt-0 mb-2">Cible</legend>
                <div class="col-sm-10">
                    <div class="form-check" name="user_profile">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios1"
                               value="producteur" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Agriculture familiale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios2"
                               value="agence de developpement">
                        <label class="form-check-label" for="gridRadios2">
                            Agriculture patronale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="user_profile[]" id="gridRadios3"
                               value="decideur">
                        <label class="form-check-label" for="gridRadios3">
                            Agriculture d'entreprise
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="form-row mt-2">
            <div class="form-group col-md-12">
                <label for="inputSurname col-form-label">Texte</label>
                <textarea name="content" class="form-control" rows="7" id="inputContent" placeholder="Favoriser l'accès au marché..."></textarea>
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="form-group col-md-8">
                <label for="inputCountry col-form-label">Ville</label>
                <input name="country" type="text" class="form-control" id="inputCountry">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Pays</label>
                <select name="pays" id="inputState" class="form-control">
                    <option selected>France</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="form-group">
                <label for="exampleFormControlFile1">Parole d'agriculteur</label>
                <input type="file" name="speaks" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <button type="submit" class="btn btn-success mb-5">Publier</button>
        </div>
    </form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>
