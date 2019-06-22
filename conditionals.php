<?php
    #CONDITIONALS

    // == , === , < , > , <= , >= , != , !==

    // $num = 6;

    // if($num == 5) {
    //     echo '5 passed';
    // } elseif($num == 6) {
    //     echo '6 passed';
    // } else {
    //     echo 'did not pass';
    // }

    #NESTING IF
    // $num = 6;

    // if($num > 4) {
    //     if($num < 10) {
    //         echo 'num passed';
    //     }
    // }

    // LOGICAL OPERATORS
    // if ($num > 4 && $num < 10) { // can also use 'AND'
    //     echo 'num passed';
    // }

    // if ($num > 4 || $num < 10) { // 'OR'
    //     echo 'num passed';
    // }

    // if ($num > 4 XOR $num < 10) { // Only one of the Two can be true.
    //     echo 'num passed';
    // }

        
    // SWITCH 
    $favColor = 'red';

    switch($favColor) {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';
    }
?>