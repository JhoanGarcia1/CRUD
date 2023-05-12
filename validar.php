<?php 

   $user = $_POST['usuario'];
   $password = $_POST['contraseña'];
   session_start();
   $_SESSION['usuario'] = $user;

   function conexion1(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "registrar-notas";

    $connect = mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);

    if(!$connect){
        echo "Error en la conexion con el servidor";
    };

    return $connect;
};

   $connect = conexion1();

   $consulta = "SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña = '$password'";

   $resultado = mysqli_query($connect, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location: home.php");
    }else{
        ?>
        <?php
        include("index.php");
        ?>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connect);