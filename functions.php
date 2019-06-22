<?php
    #FUNCTIONS

    function simpleFunction() {
        echo 'Hello World';
    }

    // simpleFunction();


    function sayHello($name = 'World') {
        echo "Hello $name<br>";
    }

    // sayHello('Joe');
    // sayHello('Bob');
    // sayHello();

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    // echo addNumbers(4, 7);

    
    // By Reference
    $myNum = 10;

    function addFive($num) {
        $num += 5;
    }

    function addTen(&$num) {
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";
    addTen($myNum);
    echo"Value: $myNum<br>";
?>