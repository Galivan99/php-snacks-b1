<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
      $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nesciunt labore enim ipsa magnam velit sint officia, eligendi autem totam ex omnis quis doloribus natus blanditiis voluptatum accusantium quasi. Doloribus.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae qui quisquam modi ab quam blanditiis debitis, perferendis aut praesentium dignissimos amet! Quae cum accusantium eaque exercitationem libero dolores neque quibusdam.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt perspiciatis, adipisci ad magni molestias illum dolores culpa rem ipsam odit aspernatur repudiandae sed impedit blanditiis veniam recusandae amet odio itaque!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A soluta, commodi, sit necessitatibus adipisci cum quasi quaerat amet numquam, sint labore veniam totam veritatis libero porro atque animi et delectus?';
    $p_array = explode(".", $text);
    // var_dump($p_array);
    foreach ($p_array as $par) {
        echo '<p>'. $par . '</p>';
    }
?>
<body>
</body>
</html>