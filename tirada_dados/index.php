<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ejercicio 3. Tirada de dados</h1>
        <?php

        function tirar_dados() {
            $aDados = array(
                'dado1' => array(array('cara' => './img/1.svg', 'puntuacion' => 1),
                    array('cara' => './img/2.svg', 'puntuacion' => 2),
                    array('cara' => './img/3.svg', 'puntuacion' => 3),
                    array('cara' => './img/4.svg', 'puntuacion' => 4),
                    array('cara' => './img/5.svg', 'puntuacion' => 5),
                    array('cara' => './img/6.svg', 'puntuacion' => 6),
                ),
                'dado2' => array(array('cara' => './img/1.svg', 'puntuacion' => 1),
                    array('cara' => './img/2.svg', 'puntuacion' => 2),
                    array('cara' => './img/3.svg', 'puntuacion' => 3),
                    array('cara' => './img/4.svg', 'puntuacion' => 4),
                    array('cara' => './img/5.svg', 'puntuacion' => 5),
                    array('cara' => './img/6.svg', 'puntuacion' => 6),
                ),
                'dado3' => array(array('cara' => './img/1.svg', 'puntuacion' => 1),
                    array('cara' => './img/2.svg', 'puntuacion' => 2),
                    array('cara' => './img/3.svg', 'puntuacion' => 3),
                    array('cara' => './img/4.svg', 'puntuacion' => 4),
                    array('cara' => './img/5.svg', 'puntuacion' => 5),
                    array('cara' => './img/6.svg', 'puntuacion' => 6),
                ),
            );
            $dado1 = $aDados['dado1'];
            $dado2 = $aDados['dado2'];
            $dado3 = $aDados['dado3'];

            $salida1 = $dado1[array_rand($dado1, 1)];
            $salida2 = $dado2[array_rand($dado2, 1)];
            $salida3 = $dado3[array_rand($dado3, 1)];
            $puntuacion = $salida1['puntuacion'] + $salida2['puntuacion'] + $salida3['puntuacion'];

            echo '<img src="' . $salida1['cara'] . '" width="100px" height="100px">';
            echo '<img src="' . $salida2['cara'] . '" width="100px" height="100px">';
            echo '<img src="' . $salida3['cara'] . '" width="100px" height="100px">';
            echo '<br>';
            echo 'Puntuacion: ' . $puntuacion;
        }

        if (isset($_POST['tirar'])) {
            tirar_dados();
        }
        ?>
        <form method="POST">
            <input type="submit" name="tirar" value="Tirar">
        </form>
    </body>
</html>
