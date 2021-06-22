<?php
    $alunni = [
        [
            'name' => 'Lorenzo',
            'lastname' => 'Calzi',
            'voti' => [10, 8, 9]
        ],
        [
            'name' => 'Chiara',
            'lastname' => 'Rossiello',
            'voti' => [8, 6, 7]
        ],
        [
            'name' => 'Tiziano',
            'lastname' => 'Amati',
            'voti' => [5, 7, 6]
        ],
    ];

    /* var_dump($alunni); */

    foreach($alunni as $alunno){
        echo '<div>';
            echo '<br>';
            echo 'La media di ' . ($alunno['name']) . ' ' . ($alunno['lastname']) . ' è:';
        echo '</div>';

        foreach($alunno as $voti){
            
            $average = ceil( array_sum($voti) / count($voti) );
            echo  $average;

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    
</body>
</html>