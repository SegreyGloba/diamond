<?php

if (is_numeric($argv[1])) {
    $n = $m = $argv[1];
    $a = zmeika($n, $m);
}
else {
    echo 'The value must be a number.', PHP_EOL;
}


function zmeika($n, $m)
{
    $z= [];
    $k = 1;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $m; $j++)
        {
            if ($i%2 == 0)
            {
                $z[$i][$j] = $k++;
            }
            else
            {
                $z[$i][$m-$j-1] = $k++;
            }
        }

    }
    return $z;
}



if ($a) {
    foreach ($a as $row) {
        ksort($row);
        foreach ($row as $value) {

            echo $value;

        }
        echo PHP_EOL;
    }
}

/*function zmeika($n, $m)
{
    $z= [];
    $k = 1;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $m; $j++)
        {
            if ($i%2 == 0)
            {
                $z[$i][$j] = $k++;

            }
            else
            {
                $z[$i][$j] = $k++;
            }
        }

    }
    return $z;
}

$a=zmeika(3, 3);
$m = 3;
for ($i = 0; $i < $m; $i++)
{
    $b = $a[$i];
    echo $b;
}
*/
