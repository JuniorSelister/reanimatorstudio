<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        $title = "Reanimator Studio";
        global $pageTitle;
        if($pageTitle != 'index.php'){
            $title .= ' | ' . $pageTitle;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
    <header class="header">
        <div class="container"> <!-- Start Header Container-->
        <?php if($pageTitle == 'index.php'): ?>
            <h1 class="logo">reanimator studio</h1>
        <?php else: ?>
            <a href="index.php" class="logo">reanimator studio</a>
        <?php endif; ?>
            <nav class="main-menu main-menu__btn--closed">
                <button class="main-menu__btn main-menu__btn--close">Hamburguer icon</button>
                <ul class="main-menu__list">
                    <li class="main-menu__item"><a class="main-menu__anchor" href="about.php">about</a></li>
                    <li class="main-menu__item"><a class="main-menu__anchor" href="index.php">portfolio</a></li>
                    <li class="main-menu__item"><a class="main-menu__anchor" href="contact.php">contact</a></li>
                </ul>
            </nav>
        </div> <!-- End Header Container-->
    </header>
<main>