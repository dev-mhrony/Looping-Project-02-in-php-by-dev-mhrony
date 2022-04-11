<?php

    /*
        Question 03: 

            This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

            Find the maximum value from this array.

            Must use a foreach loop.

    */



    $number = array(0,10,80,67,60,89,91,56,45,30,95,83,99);                     //Here all the data has been taken through array.

    $largnumber = 0 ;                                                           //Here the value of 0 index is considered to be the largest number with maximum.

    foreach ($number as $SingleNumber){                                         // Here it is used to find out the single value through forech.

        $largnumber = $largnumber + 1;                                          //It is used to determine the value in a single way according to the value of the index.
    }

    $maxNumber = $number[0];                                                    // Here the 0 value is taken as the highest value.

    for ($i = 1 ; $i < $largnumber ; $i++){                                     // Here the highest quality index array is rotated.
       
        if ($number [$i] > $maxNumber ){                                        // Here a larger value is determined by comparing the conditions.

            $maxNumber = $number [$i];                                          // Here the highest value is determined.
        }
    }

    echo "The number <b> $maxNumber </b> is the maximum value of this array." ;     //Max Number Print 











?>