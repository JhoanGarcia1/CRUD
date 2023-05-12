<?php 

    include('conexion.php');
    $con = conexion();

    $id = $_GET['id'];

    $sql = "DELETE FROM estudiantes WHERE id = '$id' ";
    $query = mysqli_query($con, $sql);

    if($query){
    Header("location: home.php");
    }
?>