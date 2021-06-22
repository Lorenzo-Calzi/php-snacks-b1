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


    /* var_dump($db); */

    foreach($db as $type => $elements){
        if($type === 'teachers'){
            echo '<div style="background-color: grey; width: 50%; margin: auto; text-align:center; font-size:20px; color:red; font-size:30px">';
                echo '<p>';
                    echo $type;
                echo '</p>';
            echo '<div>';

        } else {
            echo '<div style="background-color: green; text-align:center; font-size:20px; color:red">';
                echo '<p>';
                    echo $type;
                echo '</p>';
            echo '<div>';
        }
        
        foreach ( $elements as $element) {

            foreach( $element as $value){
                echo '<div style="color:white; font-size:25px">';
                    echo '<br>';
                        echo $value;
                    echo '</br>';
                echo '<div>';
            }
          }
    }

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
    
    <div style="background-color: red; color: white; font-size:30px" ></div>

</body>
</html>