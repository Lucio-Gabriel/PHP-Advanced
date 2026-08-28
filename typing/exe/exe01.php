<?php

declare(strict_types = 1);

function ageIncome(int $age): string 
{
    if ($age >= 60) {
        return "Você possui mais de $age, então você tem direito de meia.";
    } 

    return "Você não possui mais de 60 anos, então não tem direito de ter meia.";
}

print ageIncome(30);