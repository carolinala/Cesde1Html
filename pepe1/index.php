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
       <h1>
        <?php
        function saludar (){
            echo '<h2>' . 'Hola Mundito';
        }
        saludar();
        function usuario($nombres,$tel ){
            foreach($nombres as $nombre){
                echo "Nombre: " . $nombre . '<br>';
            }
            echo 'Telefono: '.$tel.'<br>';
        }
        echo '<br>';
        $usuario = ["Alejandro","Felipe","Carolina"];
        usuario($usuario, 5404040);
        ?>
        </h1>
    </body>
</html>
