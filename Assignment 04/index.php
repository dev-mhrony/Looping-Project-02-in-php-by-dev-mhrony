<?php

    //=================================== Qurstien 04 ===============================================

// Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3

    $number = array(0,10,80,67,60,89,91,56,45,30,95,83,99);

   foreach($number as $index => $singlen_number){            //Here this condition is used to rotate the above values through a loop.
      
    if ($index == 0){                                       // Here you have to skip the 0nd index for which the condition is created by the value of 1rd or 0nd index ==.
            
            continue;                                       //A variable called Continue is taken to skip the value of this cell which is a building function of PHP.

       }elseif ($index == 2){                               // Here you have to skip the 2nd index for which the condition is created by the value of 3rd or 2nd index ==.
            
            continue;                                       //A variable called Continue is taken to skip the value of this cell which is a building function of PHP.
       
        }elseif ($index == 4){                               // Here you have to skip the 4th index for which the condition is created by the value of 5rd or 4nd index ==.
            
            continue;                                       //A variable called Continue is taken to skip the value of this cell which is a building function of PHP.
       
        }elseif ($index == 6){                               // Here you have to skip the 6th index for which the condition is created by the value of 7rd or 6nd index ==.
            
            continue;                                       //A variable called Continue is taken to skip the value of this cell which is a building function of PHP.
       
        }elseif ($index == 8){                               // Here you have to skip the 8th index for which the condition is created by the value of 9rd or 8nd index ==.
            
            continue;                                       //A variable called Continue is taken to skip the value of this cell which is a building function of PHP.
       
        }elseif ($index == 10){                               // Here you have to skip the 10th index for which the condition is created by the value of 11rd or 10nd index ==.
            
            continue;                                       //A variable called Continue is taken to skip the value of this cell which is a building function of PHP.
           
        };


       echo $singlen_number;                                // The remaining number that will be printed will be through it.

       echo "<br>";                                         // It is used to give a break between each value.



};



   







?>