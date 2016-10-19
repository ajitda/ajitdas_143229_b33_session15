<?php
for($num=1;$num<=1000;$num++){
    for($i=2;$i<=$num;$i++){
        if($num%$i==0){
            break;
        }
    }
    if($num==$i){
        echo $num . " <br>";
    }
}