<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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

    <style media="screen">
      div{
        padding:30px;
        font-size: 30px;
        width:50%;
        margin: auto;
      }
      .grigio{
        background: gray;
        color: white;
        margin: 50px auto;
      }
      .verde{
        background: green;
        color: white;
      }
    </style>


    <title>insegnanti</title>
  </head>
  <body>
    <div class="grigio">
      <?php
        foreach ($db as $key => $ArrKey) {
          if ($key == "teachers") {
            foreach ($ArrKey as $key => $value) {
              $insegnanti = $value['name'] . " " . $value['lastname'];
              echo "<div class='red'>" . $insegnanti . "</div>" ;
            }
          }
        }
      ?>
    </div>

    <div class="verde">
      <?php
      foreach ($db as $key => $ArrKey) {
        if ($key == "pm") {
          foreach ($ArrKey as $key => $value) {
            $insegnanti = $value['name'] . " " . $value['lastname'];
            echo "<div class='red'>" . $insegnanti . "</div>" ;
          }
        }
      }
       ?>
    </div>



  </body>
</html>
