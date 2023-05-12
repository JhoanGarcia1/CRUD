<?php
    include('conexion.php');
    $con = conexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="./crearcuenta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lora:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="nav-bar">
            <div class="nav-bar__Logo">
                <a href="./index.html"><img src="./imag/notas-ancladas.png" alt="Logo"></a>
                <a href="./index.html"><h1>Registro de notas</h1></a>
            </div>
            <ul class="nav-bar__Lista">
                <li>Blogs</li>
                <li>Comunidad</li>
                <li>Contáctanos</li>
            </ul>
            <div class="nav-bar__redes_sociales">
                <a href="https://es-la.facebook.com/"><img src="./imag/facebook.png" alt="Facebook-logo"></a>
                <a href="https://twitter.com/?lang=es"><img src="./imag/twitter.png" alt="Twitter-logo"></a>
                <a href="https://www.instagram.com/"><img src="./imag/instagram .png" alt="Instagram-logo"></a>
            </div>
        </nav>
        </header>

    <section>
        <div class="Caja-login">
            <h1>Crear Cuenta</h1>
            <form action="insert_user.php" method="POST">
                <label for="/">
                    <p>Nombre</p>
                    <input type="text" name="nombre" placeholder="Nombre">
                </label>
                <label for="/">
                    <p>Apellido</p>
                    <input type="text" name="apellido" placeholder="Apellido">
                </label>
                <label for="/">
                    <p>Fecha De Nacimiento</p>
                    <input type="date" name="fecha_nacimiento">
                </label>
                <label for="/">
                    <p>Número Celular</p>
                    <input type="text" name="numero_celular" size="10" minlength="10" maxlength="10" list="defaultTels" placeholder="3101001010">
                    <datalist id="defaultTels">
                        <option value="3101001010">
                        <option value="3101001010">
                        <option value="3101001010">
                        <option value="3101001010">
                      </datalist>
                </label>
                <label for="/">
                    <P>Correo Electroníco</P>
                    <input type="email" name="correo_electronico" placeholder="Example@email.com" required>
                </label>
                <label for="/">
                    <p>Usuario</p>
                    <input type="text" name="usuario" placeholder="@Usuario">
                </label>
                <label for="/">
                    <p>Contraseña</p>
                    <input type="password" name="contraseña" placeholder=" *** ">
                </label>
                <label for="/">
                    <p>Confirmar Contraseña</p>
                    <input type="password" placeholder=" *** ">
                </label>
                <br>
                <button type="submit" value="Agregar Usuario" class="boton-crear">Crear Cuenta</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="Logo-DiamondSystem">
            <img src="./imag/notas-ancladas.png" alt="Logo" class="Logo-footer-Diamond">
            <h1>Registar Notas</h1>
          <div class="ancore">
            <a href="https://es-la.facebook.com/"><img src="./imag/facebook.png" alt="Facebook-logo"></a>
            <a href="https://twitter.com/?lang=es"><img src="./imag/twitter.png" alt="Twitter-logo"></a>
            <a href="https://www.instagram.com/"><img src="./imag/instagram .png" alt="Instagram-logo"></a>
          </div>     
        </div> 
          <p class="footer-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quo consequatur, atque rerum odit exercitationem, ut quidem eius ipsa praesentium ducimus molestiae ad, incidunt nisi quia minus voluptas.</p>
        <div class="Sección-Información">
            <span>
                <h4>Acerca de</h4>
                <br>
                <ul>
                    <a href="/"><li>Registrar Notas</li></a>
                    <a href="/"><li>Servicios</li></a>
                    <a href="/"><li>Blogs</li></a>
                    <a href="/"><li>Términos y condiciones</li></a>
                </ul>
            </span>
            <span>
                <h4>Ayuda?</h4>
                <br>
                <ul>
                    <a href="/"><li>Comunidad</li></a>
                    <a href="/"><li>Ayuda</li></a> 
                    <a href="/"><li>Crear Cuenta</li></a> 
                    <a href="/"><li>Participar en la comunidad</li></a> 
                    <a href="/"><li>Crear un blog o noticia</li></a> 
                </ul>
            </span>
            <span>
                <h4>Información de contacto</h4>
                <br>
                <ul>
                    <li><a href="/">Dirección: Cra Tv 15 N 178-33 Oficina 135</a></li>
                    <li><p>Tel: 601+ 700 06 06 <strong> / </strong> Cel: 313 333 3333</p></li>
                    <li><a href="/">Whatsapp: 313 333 3333</a></li>
                    <li><a href="/">RegistrarNotas.com</a></li>
                </ul>
            </span>
        </div>
        <p class="Copyright©20233">Copyright©20233</p>
    </footer>
</body>
</html>