<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="/OA-OI_git/project-root/public/oa-oi.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="/OA-OI_git/project-root/style.css">-->

 <?php require('maps.php'); ?>

</head>

<?php if($title=='Zone'): ?>

<body onload="init()">

<?php elseif($title=='Data'): ?>

<body onload="init2()">

<?php else: ?>

<body>

<?php endif; ?>

<?php require('nav_profiled.php'); ?>

<nav class="navbar navbar-expand-md navbar-light" style="background-color: #007580;" id="nb">
    <a class="navbar-brand text-white" href='/OA-OI_git/project-root/public/Observatory'>OA-OI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse my-0 py-0" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto my-0 py-0">

            <?php foreach($navs as $nav=>$link): ?>
            <li class="nav-item">
                <a class="nav-link text-white my-0" href=<?php echo $link; ?> > <?php echo $nav; ?> <span
                            class="sr-only">(current)</span></a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <!--<div class="row jutify-content-right bg-light">
        <img src="/OA-OI_git/project-root/public/oa-oi.png" width="20%">
    </div>-->
</nav>
<div class="container col-10 justify-content-center my-5">

    <?= $content ?>


</div>

<br>
<br>
<br>
<br>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark mt-5 mb-4" >

    <!-- Footer Links -->
    <div class="container col-md-12 text-md-left mt-5 border border-white" style="background-color: #75C9DA">

        <div class="row mx-5 py-3 justify-content-around ">

            <div class="col-md-4 mb-4 text-center border-right border-white">


                <h6 class="text-uppercase">CIRAD</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>

            </div>

            <div class="col-md-4 mb-4 text-center border-right border-white">

                <!-- Links -->
                <h6 class="text-uppercase">Liens utiles</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="text-dark" href="https://www.prerad-oi.org/">Prerad-oi.org</a>
                </p>
                    <p>Become an Affiliate</p>
                    <p>Shipping Rates</p>
                    <p>Help</p>

            </div>

            <div class="col-md-3 mx-auto mb-md-0 mb-4 text-center">

                <!-- Links -->
                <h6 class="text-uppercase">Contactez-nous</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i> Saint-Denis de la Réunion, 97490 France</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> Prerad.oi@cirad.fr</p>

            </div>


        </div>


    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="row border border-dark justify-content-center text-white my-2" style="background-color: #2D747F">
        <div class="footer-copyright text-center py-3">© Cirad, 2020
            <a href=" https://www.cirad.fr"> Cirad.fr</a>
        </div>
    </div>

    <div class="bg-white justify-content-center mt-2" >
        <div class="text-center" style="font-size: 12px">
            <p>Cette activité est réalisée dans le cadre du projet Interreg-V PRéRAD-OI cofinancé par l'Union européenne et la Région Réunion, avec le soutien du Conseil départemental de la Réunion</p>
        </div>
    </div>

</footer>
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>