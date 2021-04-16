<?php
function printArr($number){
    foreach ($number as  $num){
        echo "$num <br>";
    }
}

function largest($number){
    $large="";
    foreach($number as $num){
        if($num > $large){
            $large=$num;
        }
    }
    echo "The largest number is $large";
}