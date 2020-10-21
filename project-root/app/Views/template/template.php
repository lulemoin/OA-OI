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

<nav class="navbar navbar-expand-md navbar-light bg-light" id="nb">
    <a class="navbar-brand" href='/OA-OI_git/project-root/public/Observatory'>OA-OI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
<div class="container col-10 justify-content-center">

    <?= $content ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>