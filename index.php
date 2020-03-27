<?php

use classes\Functions as fs;

require_once __DIR__ . "/config/config.php";
global $pageClass;


$content = $pageClass->content();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <?= $pageClass->head(); ?>
</head>
<body class="<?= $pageClass->view; ?> no_scroll">
<div id="preloader">
    <div class="imgWrapper">
        <img src="<?= IMG_URL; ?>/logo.svg">
    </div>
</div>
<?= $pageClass->menu(); ?>

<main data-page="<?= $pageClass->view; ?>">
    <?= $content; ?>
</main>

<?= $pageClass->foot(); ?>
</body>
</html>