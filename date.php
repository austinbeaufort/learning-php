<?php
    // echo date('d'); // Day
    // echo date('m'); // Month
    // echo date('Y'); // Year
    // echo date('l') // Day of the Week

    // echo date('Y/m/d');
    // echo date('m-d-Y');

    // echo date('h'); // hour
    // echo date('i'); // minutes
    // echo date('s'); // seconds
    // echo date('a') // am or pm

    // SET TIME ZONE
    date_default_timezone_set('America/New_York');
    // echo date('h:i:sa');

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    // echo $timestamp;

    // echo date('m-d-Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');
    // echo $timestamp2;

    echo date('m-d-Y h:i:sa', $timestamp5);
?>