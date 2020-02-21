<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
  $nome = $_GET["nome"];
  $email = $_GET["mail"];
  $eta = $_GET["eta"];
  echo $response = filter_var($get_mail, FILTER_VALIDATE_EMAIL);
  if ((empty($nome)) || (empty($email))|| (empty($eta))) {
    $messaggio = "errore";
  }
  elseif (strlen($nome >= 3)) {
    $messaggio ="il nome e troppo corto";
  }
  elseif (!strpos($email,"@") && !strpos($email,".")) {
    $messaggio = "email non valida";
  }
  elseif (!is_numeric($eta)) {
    $messaggio = " non hai inserito un numero in eta";
  }
  else {
    $messaggio = "accesso riuscito";
  }

  // if ((strlen($nome > 3) && (strpos($email,"@") && ($eta)) {
  //   $messaggio = "il tuo nome e lungo"
  // }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <p> <?php echo $messaggio; ?></p>
  </body>
</html>
