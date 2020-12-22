<?php $title = 'Zone'; ?>


<?php ob_start(); ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4 ">Voyons comment se porte mon territoire</h1>
            <p class="lead">Who can experience the heaven and definition of a master if he has the eternal reincarnation of the guru.</p>
        </div>
    </div>

    <div id="mapid" class="my-5">
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>