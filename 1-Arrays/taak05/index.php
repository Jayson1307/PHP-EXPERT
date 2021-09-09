<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          foreach ($medewerkers as $key) {
            echo $key['voornaam'].' ';
            echo $key['achternaam'].' ';
            echo $key['functie']. '</br>';
        }
    ?>
</body>
</html>