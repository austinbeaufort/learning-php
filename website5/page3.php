<?php
    $user = [
        'name' => 'Austin', 
        'email' => 'austin@gmail.com',
        'age' => 26
    ];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);

    echo $user['email'];

    print_r($user);

?>