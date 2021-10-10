<!-- SNACK 1 -->
<?php
  $Basket = [
    [
      "casa" => "Los Angeles Lakers",
      "puntiCasa" => 82,
      "ospite" => "Golden State Warriors",
      "puntiOspite" => 106,
    ],
    [
      "casa" => "Brooklyn Nets",
      "puntiCasa" => 59,
      "ospite" => "Toronto Raptors",
      "puntiOspite" => 74,
    ],
    [
      "casa" => "Boston Celtics",
      "puntiCasa" => 75,
      "ospite" => "Chicago Bulls",
      "puntiOspite" => 70,
    ]
  ];

//   var_dump($Basket);

  for ($i=0; $i < count($Basket); $i++) {
?>
    <p style="font-size: 20px;">
      <?= $Basket[$i]['casa'] ?> -
      <?= $Basket[$i]['ospite'] ?> |
      <?= $Basket[$i]['puntiCasa'] ?> -
      <?= $Basket[$i]['puntiOspite'] ?>
    </p>
<?php } ?>