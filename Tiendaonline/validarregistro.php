<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}
if(isset($_POST['apllido'])){
    $nombre = $_POST['apellido'];
}
if(isset($_POST['ciudad'])){
    $nombre = $_POST['ciudad'];
}

try{
    require_once 'BD_conexion.php';
    $sql = "INSERT INTO `datosusuarios` (`nombre`,`apellido`,`ciudad`)";
    $sql = "VALUES ('{$nombre}','{$apellido}','{$ciudad}')";
    $resultado =$conn->query($sql);
    echo 'Datos Ingresados Correctamente';
} catch (Exception $ex) {
 $error = $ex->getMessage();
}

