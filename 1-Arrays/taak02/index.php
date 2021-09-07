<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $medewerkers = [
            [
              'voornaam' => 'Willem',
              'achternaam' => 'van Oranje',
              'functie'  => 'koning'
            ],
            [
              'voornaam' => 'Donald',
              'achternaam' => 'Trump',
              'functie'  => 'president'
            ],
            [
              'voornaam' => 'Homer',
              'achternaam' => 'Simpson',
              'functie'  => 'fabrieksarbeider'
            ],
            [
              'voornaam' => 'Johan',
              'achternaam' => 'Cruyff',
              'functie'  => 'voetbalicoon'
            ]
            ,
            [
              'voornaam' => 'Badr',
              'achternaam' => 'Hari',
              'functie'  => 'Kickboxer'
            ]
          ];
          
          for ($x=0; $x <4 ; $x++) { 
              echo $medewerkers[$x]['voornaam']. ' ';
              echo $medewerkers[$x]['achternaam']. ' ';
              echo $medewerkers[$x]['functie']. ' '. '</br>';
          }
          
         
    ?>
</body>
</html>