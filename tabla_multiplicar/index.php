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
        <table border="1">
            <tr>
                <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo '<tr>';

                    for ($j = 0; $j <= 10; $j++) {
                        $result = $i * $j;

                        echo '<td><a href="script2.php?f=' . $i . '&c=' . $j . '">' . $result . '</a></td>';
                    }
                }
                echo '</tr>';
                ?>
        </table>
    </body>
</html>
