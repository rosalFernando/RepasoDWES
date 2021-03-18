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
        <?php
        $aCapitales = [
          'MADRID','BERLIN','PARIS','LONDRES','KIEV','TOKIO','ROMA','MOSCU','CARACAS','MOSUL'  
        ];
        $aLetras = [
            'A','B','C','D','E','F','G','G','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'
        ];
        
        $tablero =[];
        
        ?>
        <table border="1">
            <tr>
                <?php
                for ($i = 0; $i <= 25; $i++) {
                     
                    echo '<tr>';

                    for ($j = 0; $j <= 25; $j++) {
                        $letra = $aLetras[array_rand($aLetras,1)];
                      
                        echo '<td width="20px" height="20px">'.$letra.'</td>';
                        
                    }
                }
                echo '</tr>';
                ?>
        </table>
    </body>
</html>
