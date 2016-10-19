<?php
function primeNumber($num){
    $isPrime =1;
    for($i=2; $i<=ceil($num/2);$i++){
        if($num%$i==0){
            $isPrime = 0;
            break;
        }
    }
    if($isPrime){
    echo $num . ' is prime';
    }else{
    echo $num .' is not prime';
    }
}
echo primeNumber(31);
