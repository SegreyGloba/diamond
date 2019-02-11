<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
set_time_limit(2);


if (is_numeric($argv[1])) {
    diamond($argv[1]);
}
else {
    echo 'The value must be a number.', PHP_EOL;
}

function diamond($n)
{
    $a = $n;
    for ($i = 1; $i < $a; $i++) {
        for ($j = $i; $j < $a; $j++)
            echo '  ';
        for ($j = 2 * $i - 1; $j > 0; $j--)
            echo (' *');
        echo PHP_EOL;
    }

    for ($i = $n; $i > 0; $i--) {
        for ($j = $n - $i; $j > 0; $j--)
            echo '  ';
        for ($j = 2 * $i - 1; $j > 0; $j--)
            echo (' *');
        echo PHP_EOL;
    }
}
