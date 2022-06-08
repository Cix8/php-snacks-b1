<?php 

$result_array = [];
$max_len_array = 15;

while (count($result_array) < $max_len_array) {
    $number = rand(1,15);
    if (!in_array($number, $result_array)) {
        $result_array[] = $number;
    }
}

var_dump($result_array);

?>