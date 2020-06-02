<?php

require_once "./bootstrap.php";

$viewVars = [];

echo $twig->render('index.html.twig', $viewVars);