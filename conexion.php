<?php
    function conexion(){
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
?>