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
      $provincies = [   
        [
                'provincie' => 'noord-holland',
                'hoofdstad' => 'haarlem',
                'bevolking' => '1,742 miljoen',
                'inwoners_gemeente' => '235.141',
            ]
            
        ];
    
    foreach($provincies as $provincie ){
        echo '<h2>' . $provincie['provincie']. '</h2>';
        echo '<ul>';
        echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
        echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
        echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
        echo '</ul>';
    
    }  
    ?>
</body>
</html>