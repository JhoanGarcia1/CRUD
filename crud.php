<?php
    include('conexion.php');
    $con = conexion();

    $id = null;
    $Estudiante = $_POST['Estudiante'];
    $Nota = $_POST['Nota'];

    $sql = "INSERT INTO estudiantes VALUES('$id', '$Estudiante', '$Nota')";
    $query = mysqli_query($con, $sql);

    if($query){
        header("Location: home.php");
    };
?>