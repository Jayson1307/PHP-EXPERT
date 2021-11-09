<?php 
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    //gegevens uit een formulier ophalen met de post method.
    $firstName = $_POST['voornaam'];
    $lastName = $_POST['achternaam'];
    echo $firstName;
    echo $lastName;
 


    // !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
    $sql = "INSERT INTO users (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)" ;//sql query
    //een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
    $stmt = $db_conn->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_firstname", $firstName ); //verbind de waardes
    $stmt->bindParam(":ph_lastname", $lastName ); //verbind de waardes
    $stmt->execute();
?>