<?php

require_once './vendor/autoload.php';
require_once './exception/InitializationFailedException.php';

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader, [
    'debug' => true
]);