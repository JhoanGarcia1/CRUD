<?php
    include('conexion.php');
    $con = conexion();

    $sql = "SELECT * FROM estudiantes";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lora:wght@400;600;700&display=swap" rel="stylesheet">
    <title>home</title>
</head>
<body>
    <aside>
        <h1>Bienvenidos</h1>
        <ul>
            <li>Notas</li>
            <li>Registrar</li>
            <li>Reporte</li>
            <li>Estudiantes</li>
            <li>Graficos</li>
            <li><a href="./index.php">Cerrar Sesion</a></li>
        </ul>
    </aside>

    <section>

        <h1>Registra las notas</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, a veniam! Ducimus reiciendis aut deserunt odit, neque, officiis rerum iure odio, numquam sunt perferendis rem tempore assumenda fugit corporis ullam!</p>

        <form action="crud.php" method="POST">
            <label for="Estudiante">
                <p>Estudiante</p>
                <input type="text" name="Estudiante" id="Estudiante" placeholder="Pepito">
            </label>
            <label for="Nota Asignada">
                <p>Nota Asignada</p>
                <input type="number" name="Nota" id="Nota Asignada" placeholder="50">
            </label>
            <button>Registrar</button>
        </form>

        <div class="table">
            <h2>Estudiantes Con Notas</h2>

            <table class="tabla">
             <thead>
                <tr>
                    <th>Id</th>
                    <th>Estudiante</th>
                    <th>Nota</th>
                    <th></th>
                    <th></th>
                </tr>
             </thead>
                <tbody> 
                 <?php while($row = mysqli_fetch_array($query)): ?>   
                  <tr>
                    <th><?= $row['id']?></th>
                    <th><?= $row['Estudiante']?></th>
                    <th><?= $row['Nota']?></th>
                    <th><a href="update.php?id=<?=$row['id']?>">Editar</a></th>
                    <th><a href="delete_user.php?id=<?=$row['id']?>">Eliminar</a></th>
                  </tr> 
                 <?php endwhile; ?> 
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>