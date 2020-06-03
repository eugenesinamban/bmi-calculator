<?php

require_once "./bootstrap.php";
require_once "./models/BMI.php";

$height = $_GET['height'] ?? null;
$weight = $_GET['weight'] ?? null;

$calculator = new BMI($height, $weight);

$bmi = $calculator->getBMI();

$viewVars = [
    'bmi' => $bmi
];

echo $twig->render('index.html.twig', $viewVars);