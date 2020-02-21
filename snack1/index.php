<?php
  $password = $_GET["password"];
  if ($password == "Boolean") {
    $class = "green";
    $messaggio = "Hai indovinato";
  }
  else {
    $class = "red";
    $messaggio = "ritenta sarai piu fortunato";
  }
// Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .green {
        color: green;
      }
      .red {
        color: red;
      }
    </style>
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
      <h1 class="<?php echo $class ?>"> <?php echo $messaggio ?> </h1>
  </body>
</html>
