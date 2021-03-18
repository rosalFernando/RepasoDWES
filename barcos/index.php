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
                $aNum=[];
                $barcos = array(
                    'barcos1' => array(
                        array(0),
                        array(0),
                        array(0),
                        array(0),
                    ),
                    'barcos2' => array(
                        array(0,0),
                        array(0,0),
                        array(0,0),
                    ),
                    'barcos3' => array(
                        array(0,0,0),
                        array(0,0,0),
                    ),
                    'barcos4' => array(
                        array(0,0,0,0),
                    ),
                );
                
                for($i=0;$i<=30;$i++){
                    array_push($aNum, rand(1,9));
                }
               
               
                ?>
        </table>
    </body>
</html>
