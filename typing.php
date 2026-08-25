<?php

declare(strict_types = 1);

function calculate_imc(float $peso, float $altura): int 
{
    var_dump($peso, $altura);
    return $peso/ ($altura*$altura);
}

var_dump( calculate_imc(60, 1.69) );