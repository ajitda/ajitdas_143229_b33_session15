<?php
function findPrime($count)
{
    for ($num = 1; $num <= $count; $num++) {
        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {
                break;
            }
        }
        if ($num == $i) {
            echo $num . " <br>";
        }
    }
}

$prime= findPrime(50);
echo $prime;


