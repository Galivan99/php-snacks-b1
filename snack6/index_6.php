<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class = "gray">
        <?php
            foreach ($db as $key => $value) {
                if ($key === 'teachers') {
                    echo $value['name']. ' ' .$value['lastname'];
                }
            }
        ?>
    </div>
    <div class='green'>
        <?php
                foreach ($db as $key => $value) {
                    if ($key === 'pm') {
                        echo $value['name']. ' ' .$value['lastname'];
                    }
                }
            ?>
    </div>
</body>
</html>