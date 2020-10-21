<?php $title = 'Deconnexion'; ?>

<?php ob_start(); ?>

<form action="/OA-OI_git/project-root/public/Deconnexion/end" method="post" mt-5>
    <p class="display-4 text-center">Etes-vous sur de vouloir vous deconnecter ?</p>
    <div class="row justify-content-center">
        <button type="submit" class="btn btn-danger mt-5 mb-5">Se déconnecter</button>
    </div>
</form>


<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>
