<?php $title = 'Data'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-4 text-center">Données</h1>
        <p class="lead text-center">Je peux ici chercher tout type de données que ce soit par zone géographique ou selon les typologies.</p>
    </div>
</div>
<div class="d-flex justify-content-end">
    <div id="mapid" class="m-5 col-md-8">
    </div>
</div>


<div id="performance">

    <?php echo $moy_perf; ?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>