<?php $title = 'Data'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-4 text-center">Données</h1>
        <p class="lead text-center">Je peux ici chercher tout type de données que ce soit par zone géographique ou selon les typologies.</p>
    </div>
</div>
<div class="d-flex flex-row">
    <div id="mapid" class="m-5 col-md-6 "></div>

    <div id="performance" class="m-5 col-md-4"><?php echo $moy_perf; ?></div>

</div>




<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>