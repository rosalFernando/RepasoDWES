<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!(isset($_GET['f'])&&isset($_GET['c']))){
 header('Location:index.php');
}
 $num1 = $_GET['f'];
    $num2 = $_GET['c'];
    $resultado = $num1 * $num2;
    
    echo $_GET['f'].' X '.$_GET['c'].' = '.$resultado;
    echo ' <a href="index.php">Volver</a>';

?>


