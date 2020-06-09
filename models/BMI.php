<?php

class BMI 
{
    protected $height;
    protected $weight;

    public function __construct($height = null, $weight = null)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    private function isValid($value = null) {

        if (null === $value) {
            return false;
        }

        if (abs(floatval($value)) <= 0 || !is_numeric($value)) {
            $_COOKIE['error'] = "Enter correct values!";
            return false;
        }

        return true;
    }

    public function getBMI() : ?float {

        $weight = $this->weight;
        $height = $this->height;
        
        if (!$this->isValid($height) || !$this->isValid($weight)) {
            return null;
        }

        $bmi = 0;
        $heightInMeters = $height * 0.01;

        $height = pow($heightInMeters, 2);

        $bmi = round($weight / $height, 1);

        return $bmi;
        
    }

    public function getBMIDescription(float $bmi = null) : ?string {
        if (null === $bmi) {

            return null;

        } elseif($bmi < 18.5) {

            return "You're underweight! You need to increase your weight!";

        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            
            return "You have a healthy weight! Keep it up!";

        } elseif ($bmi >= 25 && $bmi < 29.9) {

            return "You're overweight! You need to decrease your weight!";

        } else {

            return "You're obese! You need to eat less, workout more, and live a healthier lifestyle!";
            
        }
    }

}