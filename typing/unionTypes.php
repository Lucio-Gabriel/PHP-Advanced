<?php
declare(strict_types=1);

function soma_data($data_base, DateInterval|int $interval)
{
    $date = new DateTime($data_base);

    if ($interval instanceof DateInterval) {
        $date->add($interval);
    } else {
        $date->add( new DateInterval('P' . $interval . 'D') );
    }

    return $date->format('Y-m-d');
}

print soma_data('2023-12-10', 5);
PHP_EOL;
print soma_data('2023-12-10', new DateInterval('P12M'));
