<!-- SNACK 2 -->

<?php
  // creo le variabili con GET
  $nome = $_GET['name'];
  $email = $_GET['email'];
  $eta = $_GET['age'];

  // var_dump($nome, $email, $eta);

  // se le condizioni sono rispettate
  if ((strlen($nome) > 3) &&
      filter_var($email, FILTER_VALIDATE_EMAIL) &&
      filter_var($eta, FILTER_VALIDATE_INT)) {
?>
    <p style="font-size: 25px; color: green;">
      Accesso riuscito
    </p>
<?php } else { ?>
    <p style="font-size: 25px; color: red;">
      Accesso negato
    </p>
<?php } ?>