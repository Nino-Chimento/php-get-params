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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
        .grey {
          background-color: grey;
        }
        .red {
          background-color: red;
        }
    </style>
    <title></title>
  </head>
  <body>
      <div class="grey">
          <?php for ($i=0; $i <count($db["pm"]) ; $i++) {
            echo $db["pm"][$i]["name"]." ".$db["pm"][$i]["lastname"];
          } ?>
      </div>
      <div class="red">
          <?php for ($i=0; $i <count($db["teachers"]) ; $i++) {
            echo $db["teachers"][$I]["name"]." ". $db["teachers"][$i]["lastname"];
          } ?>
      </div>
  </body>
</html>
