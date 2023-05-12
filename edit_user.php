<?php 

 include('conexion.php');
 $con = conexion();

 $id = $_POST['id'];
 $Estudiante = $_POST['Estudiante'];
 $Nota = $_POST['Nota'];

 $sql = "UPDATE estudiantes SET Estudiante = '$Estudiante', Nota = '$Nota' WHERE id = '$id' ";
 $query = mysqli_query($con, $sql);

 if($query){
    Header("location: home.php");
 }
?>