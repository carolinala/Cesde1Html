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
        <h2>
        
        <?php
         //Arreglos
        //$Arreglo =[2,'hola',5];
                //echo $Arreglo[0];
        $Arreglo = array (2,'hola',5);
        print_r($Arreglo);
               // echo $Arreglo [1]. "<br>" .$Arreglo[0];
        
        ?>
        </h2>
        
        <pre>
            <h3>
                <?php
                    //print_r($Arreglo);
                    //var_dump($Arreglo);
                    //echo "<br>";
                    //
                    //$Arreglo[] = "python";
                    //var_dump($Arreglo);
                    //
                //$dato = array_pop($Arreglo);
                //print_r($Arreglo)
                
                //ARREGLOS ASOCIADOS
                $Usuario = array ('Nombre' => 'Juan','Apellido' => 'Moreno','Cedula' => 1000538054);
                echo "<h1>".$Usuario [Nombre].'</h1>';
                echo '<br>';
                $Existe  = in_array("hola",$Arreglo);
                echo $Existe ;
                
                foreach ($Usuario as $user)
                    {
                    echo $user . "<br>";
                }
                    
                ?>
                <ul>
                    <?php
                        foreach ($Usuario as $key => $user)
                    {
                    echo "<li>".$key . $user . "</li>";
                    }
                    
                    for($i=0; $i < 4; $i++){
                        echo $i;
                    }
                    ?>
                </ul>
            </h3>
        </pre>
     
    </body>
</html>
