<?php
    #Array - Variable that holds multiple values
    
    // Indexed
    // Associative
    // Multi-Dimensional

    // Indexed
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW'; // adds to end of array


    // var_dump($cars);
    // print_r($cars); // Prints the array
    // echo count($cars);
    // echo $cars[3];
    // echo $cars[4];
    // echo $cars[1];
    // echo $ids[2];
    // echo $people[1];


    // Associative Arrays // Key value pairs
    $people = ['Brad' => 35, 'Jose' => 32, 'William' => 37];
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
    // echo $ids[22];
    // echo $people['Brad'];
    // $people['Jill'] = 42;
    // echo $people['Jill'];
    // print_r($people);
    // var_dump($people);


    // Multi-Dimensional
    $cars = [
        ['Honda', 20, 10],
        ['Toyota', 30, 20],
        ['Ford', 23, 12]
    ];

    echo $cars[1][2];
?>