<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$aColores = ['blue','red','green','purple','orange','aquamarine','yellow','pink','golden','silver','maroon'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de multiplicar con colores</title>
    </head>
    <body>
        <h1>Tabla de multiplicar con colores</h1>
        <table>
            <tr>
                <?php
                for ($i = 0; $i <= 10; $i++) {
                     
                    echo '<tr bgcolor="'.$aColores[$i].'">';

                    for ($j = 0; $j <= 10; $j++) {
                        $result = $i * $j;

                        echo '<td width="20px" height="20px"><a style="text-decoration:none;color:black" href="script2.php?f=' . $i . '&c=' . $j . '">' . $result . '</a></td>';
                    }
                }
                echo '</tr>';
                ?>
        </table>
    </body>
</html>
