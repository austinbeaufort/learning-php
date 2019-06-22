<?php

$people[] = 'Steve';
$people[] = 'Joe';
$people[] = 'April';
$people[] = 'Frank';
$people[] = 'George';
$people[] = 'Tom';
$people[] = 'Lucy';
$people[] = 'Adam';
$people[] = 'Peter';
$people[] = 'Jose';
$people[] = 'John';
$people[] = 'Rhonda';
$people[] = 'Ernie';
$people[] = 'Johanna';
$people[] = 'Evan';
$people[] = 'Kathy';
$people[] = 'Rachel';
$people[] = 'Katie';
$people[] = 'Malcom';
$people[] = 'Greg';
$people[] = 'Mary';
$people[] = 'Brad';
$people[] = 'William';
$people[] = 'Mike';
$people[] = 'Austin';
$people[] = 'Dave';
$people[] = 'Derek';
$people[] = 'Jillian';

// Get Query String
$q = $_REQUEST['q'];
$suggestion = '';

// Gett Suggestions
if($q !== '') {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === '') {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>