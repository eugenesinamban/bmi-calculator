<?php

class BMI 
{
    protected $height;
    protected $weight;
    protected $bmi = [
        'underweight',
        'normal_weight',
        'overweight',
        'obese'
    ];

    public function __construct(int $height = null, int $weight = null)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getBMI() : ?float {

        $weight = $this->weight;
        $height = $this->height;
        
        if ($height === null || $weight === null) {
            return 0;
        }

        $bmi = 0;
        $heightInMeters = $height * 0.01;

        $height = pow($heightInMeters, 2);

        $bmi = round($weight / $height, 1);

        return $bmi;
        
    }

}