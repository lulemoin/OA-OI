<?php $title = 'Data'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-4 text-center">Annuaire</h1>
        <p class="lead text-center">Trouvez ici tous les acteurs impliqués autour de l'agriculture !</p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>