<?php $title = 'Data'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-4 text-center">Annuaire</h1>
        <p class="lead text-center">Trouvez ici tous les acteurs impliqués autour de l'agriculture !</p>
    </div>
</div>
<div class="row justify-content-center">
    <a class="btn btn-primary mx-auto col-md-3 py-3" href="/OA-OI_git/project-root/public/Directory/research" role="button">Acteurs</a>
    <a class="btn btn-primary mx-auto col-md-3 py-3" href="/OA-OI_git/project-root/public/Directory/research" role="button">Projets</a>
</div>


<?php if(isset($users)): ?>

    <table class="table table-striped my-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>

        <?php for($i=0; $i<sizeof($users); $i++): ?>

        <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $users[$i][0] ?></td>
            <td><?php echo $users[$i][1]?></td>
            <td><?php echo $users[$i][2] ?></td>
        </tr>

        <?php endfor; ?>

        </tbody>
    </table>

    <?php endif; ?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>