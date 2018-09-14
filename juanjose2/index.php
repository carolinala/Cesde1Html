<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
    </head>
    <body>
        <h1>
             <?php
             // Esto Es Un Comentario
                //echo 'Hola Juan, Tia Te Ama  ';
                //echo '<br>';
                $SegundaVariable = 1;
                $PrimeraVariable= 2;
                $lenguaje = 'html';
                
                //echo $PrimeraVariable.''."<br>".$SegundaVariable."<br>";
                echo $PrimeraVariable - $SegundaVariable;
                //echo $SegundaVariable;
                
                if ($PrimeraVariable ==2 && $SegundaVariable==1){
                    echo 'Soy Menor';
                }
                else{
                    echo 'Soy Mayor';
                }
                echo "<br>";
                switch ($lenguaje){
                    case 'php':
                        echo'php';
                        break;
                    case 'javascript':
                        echo'javascript';
                        break;
                    case 'html':
                        echo'html';
                        break;
                }
                        
             ?>
        </h1>
        <p>
            <h2>
                <?php
                   echo "Caro Carito Caro"
                ?>
            </h2>
        </p>
     
    </body>
</html>
