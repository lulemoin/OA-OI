<?php $title = 'Data'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">
        <h1 class="display-4 text-center">Annuaire</h1>
        <p class="lead text-center">Trouvez ici tous les acteurs impliqués autour de l'agriculture !</p>
    </div>
</div>


    <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a class="btn btn-primary active" href="/OA-OI_git/project-root/public/Directory/researchA" role="button">Acteurs</a>
            <a class="btn btn-primary" href="/OA-OI_git/project-root/public/Directory/researchP" role="button">Projets...en attente</a>
        </div>
    </div>

<!--
<div class="row justify-content-around">
    <a class="btn btn-primary mx-auto col-md-3 py-3" href="/OA-OI_git/project-root/public/Directory/research" role="button">Acteurs</a>
    <a class="btn btn-primary mx-auto col-md-3 py-3" href="/OA-OI_git/project-root/public/Directory/research" role="button">Projets</a>
</div>
-->

<?php if(isset($users)): ?>
    <form method="post" action="/OA-OI_git/project-root/public/Directory/researchA" class=" col-md-4 my-5 mx-3">
        <label class="d-flex justify-content-center h4">Critères de recherche :</label>
        <div class="row justify-content-around ">
            <div class="d-flex flex-column">
                <div class="form-group mt-2">
                    <div class="form-check">
                        <input class="form-check-input" name="profil[]" value="producteur" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Producteurs
                        </label>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="form-check">
                        <input class="form-check-input" name="profil[]" value="decideur" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                            Décideurs politiques
                        </label>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="form-check">
                        <input class="form-check-input" name="profil[]" value="chercheur" type="checkbox" id="gridCheck3">
                        <label class="form-check-label" for="gridCheck3">
                            Chercheurs
                        </label>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="form-check">
                        <input class="form-check-input" name="profil[]" value="agence de developpement" type="checkbox" id="gridCheck4">
                        <label class="form-check-label" for="gridCheck4">
                            Agence de développement
                        </label>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row my-5 mx-3 justify-content-center">
            <button type="submit" class="btn btn-success col-md-4">Actualiser </button>
        </div>
    </form>




    <table class="table table-striped my-5">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Profil</th>
                <th scope="col">Ville</th>

            </tr>
        </thead>
        <tbody>

        <?php for($i=0; $i<sizeof($users); $i++): ?>


            <tr>

                <td><?php echo $users[$i][0] ?></td>
                <td><?php echo $users[$i][1]?></td>
                <td><?php echo htmlspecialchars($users[$i][2]) ?></td>
                <td><?php echo $users[$i][3] ?></td>
                <td><?php echo $users[$i][4] ?></td>
            </tr>

        <?php endfor; ?>

        </tbody>
    </table>

    <?php endif; ?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>