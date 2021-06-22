<?php

    $calendar = [
        [
            'squad_1' => 'Olimpia Milano',
            'squad_2' => 'Cantù',
            'punteggio_1' => '10',
            'punteggio_2' => '20',
        ],
        [
            'squad_1' => 'Bucks',
            'squad_2' => 'Hawks',
            'punteggio_1' => '30',
            'punteggio_2' => '5',
        ],
        [
            'squad_1' => 'Phoenix Suns',
            'squad_2' => 'Clippers',
            'punteggio_1' => '20',
            'punteggio_2' => '15',
        ],
        [
            'squad_1' => 'Sixers',
            'squad_2' => 'Jazz',
            'punteggio_1' => '40',
            'punteggio_2' => '50',
        ],

    ];
    
    /* var_dump($calendar); */

    foreach($calendar as $try){
        echo '<p>';
        echo $try['squad_1'] . ' - ' . $try['squad_2'] . 
        ' | ' . $try['punteggio_1'] . ' - ' . $try['punteggio_2'];
        echo '</p>';
    }

    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
</body>
</html>