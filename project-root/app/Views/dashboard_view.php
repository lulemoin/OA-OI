<?php $title = 'Mon compte'; ?>

<?php ob_start(); ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Me voici dans mon espace personnel</h1>
            <p class="lead">Je peux voir mes stats, mais aussi modifier mes informations personnelles et les droits d'accès.</p>
        </div>
    </div>
<div id="dataviz" class ="col-md-12 justify-content-around" >

    <div id="compo" class="m-5 col-md-4"><?php print_r($compo); ?></div>
</div>

<div id="barchart">
    <br>
    <br>
    <br>
</div>
    <?php //echo $pb ?>
<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>