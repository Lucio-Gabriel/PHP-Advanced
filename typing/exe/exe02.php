<?php

declare(strict_types = 1);

function formatTitle(string $nameMovie, int $yearLaunch): string 
{
    return "Título do filme: $nameMovie e seu ano de lançamento: ($yearLaunch)";
}

print formatTitle('The Batman', 2022);