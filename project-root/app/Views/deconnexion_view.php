<?php $title = 'Deconnexion'; ?>

<?php ob_start(); ?>

<form class="mt-2" action="/OA-OI_git/project-root/public/Deconnexion/end" method="post" mt-5>
    <h4>Etes-vous sur de vouloir vous deconnecter ?</h4>
</br>
    <button type="submit" class="btn btn-danger mt-5mb-5">Se déconnecter</button>
</form>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
