<?php
$r_number = [];
while (count($r_number) < 15) {
    $number = rand(1,100);
    if (!in_array($number, $r_number) ) {
        $r_number[] = $number;
    }
var_dump($r_number);
}
?>
