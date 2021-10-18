<?php

    require_once '../vendor/autoload.php';

    use CowSay\Cow;

    $bessie = new Cow('You touch my tralala');
    $bessie->setEyes('oO')->setTongue('U')->setPoop('@@@')->setUdder('W');
    $output = $bessie->say();
    echo $bessie;


?>