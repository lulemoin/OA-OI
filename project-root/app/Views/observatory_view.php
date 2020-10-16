<?php $title = 'Observatoire'; ?>


<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Qui suis-je ?</h1>
        <p class="lead">L'observatoire des agricultures de l'océan indien souhait a pour objectif de caractériser les agricultures familiales dans leur diversité</p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
