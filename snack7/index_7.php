<?php

$al = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'voti' => [5,7,8,4,6]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'voti' => [4,8,9,10,3]
    ]
];

function media_voti($array){
   
    $somma = 0;
    foreach ($array as $value) {
        $somma +=$value;
    }
    $media = $somma/count($array);
    return $media;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($al as $data) {
            echo "<h3>". $data["name"]. " ". $data["lastname"]. " ha una media di ". media_voti($data["voti"]). "</h3>";
        }
    ?>
</body>
</html>