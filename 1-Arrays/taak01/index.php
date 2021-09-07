<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pauper wereld broer</title>
</head>
<body>
  <?php
    $medewerker = [
        [
          'voornaam' => 'Willem',
          'achternaam' => 'van Oranje',
          'functie'  => 'koning'
        ],
        [
          'voornaam' => 'Donald',
          'achternaam' => 'Trump',
          'functie'  => 'president'
        ]
      ];
      echo "de ", $medewerker[0]['functie'], " heet ",  $medewerker[0]['voornaam'], " ",  $medewerker[0]['achternaam'], '</br>',
      $medewerker[1]['voornaam'], " ", $medewerker[1]['achternaam'], " is een ", $medewerker[1]['functie'];
      
  ?>
</body>
</html>
