<?php $title = 'Mon compte'; ?>

<?php ob_start(); ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Me voici dans mon espace personnel</h1>
            <p class="lead">Je peux voir mes stats, mais aussi modifier mes informations personnelles et les droits d'accès.</p>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>