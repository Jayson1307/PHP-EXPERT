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
        $database_lokatie     = 'localhost';
        $database_naam        = 'toolsforever';
        $database_gebruiker   = 'root';
        $database_wachtwoord  = '';
        
        $database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
    
        $sql = "SELECT * FROM locations";
    $statement = $database_connectie->prepare($sql); //haal alle gebruikers op uit de database toolsforever
    $statement->execute();
    $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($database_gegevens as $lokaties){  
        echo '-' . $lokaties['id'] . "<br>";
        echo '-' . $lokaties['name'] . "<br>";
        echo '-' . $lokaties['address'] . "<br>";
        echo '-' . $lokaties['city'] ."<br>";
        echo "<br>";
      
      }
    ?>
</body>
</html>