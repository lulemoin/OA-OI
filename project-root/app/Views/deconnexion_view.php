<?php $title = 'Connexion'; ?>
<?php $navigations=["Accueil"=>"/OA-OI_git/project-root/public/data","Données"=>"/OA-OI_git/project-root/public/Observatory"]; ?>

<?php ob_start(); ?>

<div class="form" mt-5>
    <h4>Etes-vous sur de vouloir vous deconnecter ?</h4>
    <button type="submit" class="btn btn-danger mt-5mb-5">Se déconnecter</button>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
