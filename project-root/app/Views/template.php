<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="style.css" rel="stylesheet" />
</head>



<body>
<nav>
    <ul>

        <?=
        var_dump($navigations);
        foreach ($navigations as $name=>$link)
        {
            echo '<li><a href='.$link.'></a>'.$name.'</li>';
        } ?>

    </ul>
</nav>



<?= $content ?>
</body>
</html>