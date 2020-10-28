<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="/OA-OI_git/project-root/public/oa-oi.png">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="/OA-OI_git/project-root/style.css">-->

 <?php require('maps.php'); ?>

</head>

<?php if($title=='Zone'||$title=='Data'): ?>

<body onload="init()">

<?php else: ?>

<body>

<?php endif; ?>

<?php require('nav_profiled.php'); ?>

<nav class="navbar navbar-expand-md navbar-light " style="background-color: #659F87;" id="nb">
    <a class="navbar-brand" href='/OA-OI_git/project-root/public/Observatory'>OA-OI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">

            <?php foreach($navs as $nav=>$link): ?>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo $link; ?> > <?php echo $nav; ?> <span
                            class="sr-only">(current)</span></a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</nav>
<div class="container col-10 justify-content-center my-5">

    <?= $content ?>


</div>

<br>
<br>
<br>
<br>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark my-5" >

    <!-- Footer Links -->
    <div class="container col-md-12 text-md-left mt-5 border border-white bg-light" style="background-color: #35B8D3">

        <div class="row mx-5 py-3 justify-content-around ">

            <div class="col-md-3 mx-auto text-center">


                <h6 class="text-uppercase">CIRAD</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>

            </div>

            <div class="col-md-3 mx-auto mb-4 text-center">

                <!-- Links -->
                <h6 class="text-uppercase">Liens utiles</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <p>Your Account</p>
                </p>
                <p>
                    <p>Become an Affiliate</p>
                </p>
                <p>
                    <p>Shipping Rates</p>
                </p>
                <p>
                    <p>Help</p>
                </p>

            </div>

            <div class="col-md-3 mx-auto mb-md-0 mb-4 text-center">

                <!-- Links -->
                <h6 class="text-uppercase">Contactez-nous</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

            </div>


        </div>


    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="row border border-dark justify-content-center text-white my-2" style="background-color: #659F87">
        <div class="footer-copyright text-center py-3">© Cirad 2020
            <a href=" https://www.cirad.fr"> Cirad.fr</a>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>