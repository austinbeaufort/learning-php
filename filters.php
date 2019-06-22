<?php
    // Check for posted data
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }

    // if(filter_has_var(INPUT_POST, 'data')) {
    //     $email = $_POST['data'];

    //     // Remove illegal chars
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email.'<br>';

    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         echo 'Email is valid';
    //     } else {
    //         echo 'Email is NOT valid';
    //     }
    // }

    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMAIL
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL

    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL

    // $var = 23;

    // if(filter_var($var, FILTER_VALIDATE_INT)) {
    //     echo $var. ' is a number';
    // } else {
    //     echo $var. ' is NOT a number';
    // }

    // $var = '323lk2j3lk3j23lk32lk32jlk23j';
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    // $var = '<script>alert("hacked")</script>';
    // echo $var;
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    // $filters = [
    //     "data" => FILTER_VALIDATE_EMAIL,
    //     "data2" => [
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => [
    //             "min_range" => 1,
    //             "max_range" => 100
    //         ]
    //     ]
    // ];

    // print_r(filter_input_array(INPUT_POST, $filters));


    $arr = [
        'name' => 'austin beaufort',
        'age' => '22',
        'email' => 'austin@gmail.com'
    ];

    $filters = [
        'name' => [
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 120
            ]
        ],
        'email' => FILTER_VALIDATE_EMAIL
    ];

    print_r(filter_var_array($arr, $filters));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>