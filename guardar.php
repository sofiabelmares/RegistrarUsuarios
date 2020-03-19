<?php
 function conectar(){
    $user="root";
    $pass="its2020";
    $server="35.238.223.246";
    $db="tec";
    $db_port="3306";
    $conectar = mysqli_connect($server,$user,$pass,$db,$db_port);
    return $conectar;
}
 $conectar=conectar(); 
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $email = $_POST['email'];

$insertar = "INSERT INTO clientes VALUES ('$nombre','$apellido','$email') ";

$query = mysqli_query($conectar, $insertar);

if($query){

    echo "<script> alert('correcto');
     location.href = 'index.html';
    </script>";
 
 }else{
     echo "<script> alert('incorrecto');
     location.href = 'index.html';
     </script>";
 }

?>