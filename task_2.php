<?php 

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeNumbers($numbers)
{
    $result = [];

    foreach ($numbers as $number) {

        // check if the number is odd
        if ($number % 2 != 0) {
            // if the number is odd, add it to the result array
            $result[] = $number;
        }
    }



    // Print the result array
    print_r($result);
}

removeNumbers($numbers);


?>