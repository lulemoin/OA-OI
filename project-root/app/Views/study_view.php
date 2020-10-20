<?php $title = 'Data'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-4 text-center">Etudes</h1>
        <p class="lead text-center">Voici toutes les études que j'ai publiées</p>
    </div>
</div>

    <div class="row justify-content-center">
        <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
            <label class="btn btn-secondary">
                <input type="radio" name="options" onclick="location.href='/OA-OI_git/project-root/public/Study/add'" id="option1" checked> Ecrire une nouvelle étude
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" onclick="location.href='/OA-OI_git/project-root/public/Study/add'" id="option2"> Faire autre chose
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" onclick="location.href='/OA-OI_git/project-root/public/Study/add'" id="option3"> Faire encore autre chose
            </label>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>