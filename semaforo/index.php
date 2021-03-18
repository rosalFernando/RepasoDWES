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
        <h1>Semaforo</h1>
        <?php
        if (!isset($_POST['parar']) && !isset($_POST['precaucion']) && !isset($_POST['adelante'])) {
            $ancho = 100;
            $alto = 100;
            $cx = 50;
            $cy = 50;
            $r = 40;
            echo '<h3>Semaforo apagado</h3>';
            echo '<table border="1">';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';

            echo '</table>';
        } else {
            if (isset($_POST['parar'])) {
                parar();
            }
            if (isset($_POST['precaucion'])) {
                precaucion();
            }
            if (isset($_POST['adelante'])) {
                adelante();
            }
        }

        function parar() {
            $ancho = 100;
            $alto = 100;
            $cx = 50;
            $cy = 50;
            $r = 40;
            echo '<table border="1">';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="red" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';

            echo '</table>';
        }

        function precaucion() {
            $ancho = 100;
            $alto = 100;
            $cx = 50;
            $cy = 50;
            $r = 40;
            echo '<table border="1">';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="yellow" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';

            echo '</table>';
        }

        function adelante() {
            $ancho = 100;
            $alto = 100;
            $cx = 50;
            $cy = 50;
            $r = 40;
            echo '<table border="1">';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="black" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo '<svg width=' . $ancho . ' height=' . $alto . '>';
            echo '<circle cx=' . $cx . ' cy=' . $cy . ' r=' . $r . ' stroke="black" stroke-width="2" fill="green" />';
            echo '</svg>';
            echo '</td>';
            echo '</tr>';

            echo '</table>';
        }
        ?>

        <form method="POST">
            <input type="submit" name="parar" value="Parar">
            <input type="submit" name="precaucion" value="Precaucion">
            <input type="submit" name="adelante" value="Adelante">
        </form>

    </body>
</html>
