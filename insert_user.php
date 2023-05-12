<?php 

include('conexion.php');
$con = conexion();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$numero_celular = $_POST['numero_celular'];
$correo_electronico = $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO usuarios VALUES('$id', '$nombre', '$apellido', '$fecha_nacimiento', '$numero_celular', '$correo_electronico', '$usuario', '$contraseña')";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
}
?>
