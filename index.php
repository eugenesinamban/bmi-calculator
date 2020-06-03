<?php

require_once "./bootstrap.php";
require_once "./models/BMI.php";

$height = $_GET['height'] ?? null;
$weight = $_GET['weight'] ?? null;

$calculator = new BMI($height, $weight);

$bmi = $calculator->getBMI();
$description = $calculator->getBMIDescription($bmi);

$viewVars = [
    'bmi' => $bmi,
    'description' => $description
];

echo $twig->render('index.html.twig', $viewVars);