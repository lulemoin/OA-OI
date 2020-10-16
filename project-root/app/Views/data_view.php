<?php $title = 'Data'; ?>
<?php $navigations=["Accueil"=>"/OA-OI_git/project-root/public/data","Données"=>"/OA-OI_git/project-root/public/Observatory"]; ?>


<?php ob_start(); ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Données</h1>
            <p class="lead">Je peux ici chercher tout type de données que ce soit par zone géographique ou selon les typologies.</p>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>