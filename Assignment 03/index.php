<?php

    /*
        Question 03: 

            This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

            Find the maximum value from this array.

            Must use a foreach loop.

    */



    $number = array(0,10,80,67,60,89,91,56,45,30,95,83,99);

    $largnumber = 0 ;

    foreach ($number as $SingleNumber){
        $largnumber = $largnumber + 1;
    }

    $maxNumber = $number[0];

    for ($i = 1 ; $i < $largnumber ; $i++){
        if ($number [$i] > $maxNumber ){
            $maxNumber = $number [$i];
        }
    }

    echo "The number <b> $maxNumber </b> is the maximum value of this array." ;











?>