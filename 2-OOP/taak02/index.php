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
        class auto{ 
            public $merk;
            public $kleur;
            public $type;
            public $uitvoering;
            public $brandstof;
        }

        $nieuweauto = new auto();
        $nieuweauto->merk = 'Tesla';
        echo $nieuweauto->merk;
        $nogeennieuweauto = new auto();
    ?> 
</body>
</html>