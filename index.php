<?php

    $utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : "";
    if($utm_content === "calc") {
        require_once('calculator/index.php');
    }
    else {
        require_once('templates/header/header.php');
        //full
        require_once('templates/full/utp.php');
        // require_once('templates/full/poliv.php');
        require_once('templates/full/kalkulator.php');
        if($utm_content == "bel_zavod") {
            require_once('templates/full/reviews.php');
        }
        require_once('templates/full/catalog.php');
        require_once('templates/full/clients.php');
        require_once('templates/full/dont_know.php');
        require_once('templates/full/eit.php');
        require_once('templates/full/discount.php');
        require_once('templates/full/why.php');
        require_once('templates/full/craft.php');
        require_once('templates/full/how.php');
        require_once('templates/full/sert.php');
        require_once('templates/full/doptovary.php');
        require_once('templates/full/foot.php');
        // require_once('templates/full/powered.php');

        //mobile

        require_once('templates/footer/footer.php');
    }
?>