<?php $title = 'Projets'; ?>



<?php if($_SESSION['user_profile']!='agence de developpement'): ?>
        <?php ob_start(); ?>
            <div class="alert alert-danger" role="alert">
                Ce n'est pas fait pour vous   !
            </div>
        <?php $content = ob_get_clean(); ?>
    <?php else: ?>
        <?php ob_start(); ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Ici, c'est mon terrain pour l'action</h1>
                <p class="lead">The moon dies stigma like a fantastic star. This paralysis has only been dissolved by a quirky teleporter. </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="options" onclick="location.href='/OA-OI_git/project-root/public/Project/add'" id="option1" checked> Se lancer dans un nouveau projet
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" onclick="location.href='/OA-OI_git/project-root/public/Project/add'" id="option2"> Faire autre chose
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" onclick="location.href='/OA-OI_git/project-root/public/Project/add'" id="option3"> Faire encore autre chose
                </label>
            </div>
        </div>

        <?php for($j=0; $j<3 ; $j++): ?>

            <div class="container col-md-12">
                <div class="row justify-content-center">
            <?php for($i=0; $i<3 ; $i++): ?>
                    <div class="card col-3 mr-3 mb-4">
                        <img src="/OA-OI_git/project-root/public/project.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Le nom du projet</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/project/" class="btn btn-primary">Suivre ou évaluer</a>
                        </div>
                    </div>
            <?php endfor; ?>
                </div>
            </div>

    <?php endfor; ?>
    <?php $content = ob_get_clean(); ?>
<?php endif; ?>

<?php require('template/template.php'); ?>
