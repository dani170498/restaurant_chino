
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro empleados</title>
    <link rel="icon" type="image/png" href="images/homelo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/a2648292b1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <script defer src="js/index.js"></script>
</head>
<body>
    <header class="header">
        
        <nav class="nav">
            <button class="nav-toggle" aria-label="abrir menú"><i class="fa-solid fa-bars"></i></button>

                    <ul class="nav-menu ">
                        <li class="nav-menu-item"><a href="index.php" class="nav-menu-link nav-link">Inicio</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Nuestros Platos</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Delivery</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Promociones</a></li>
                    </ul>

                    <ul class="nav-login">
                        <li class="nav-menu-item"><a href="" class="nav-login-link nav-link">iniciar sesión</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-login-link nav-link">regístrate</a></li>
                    </ul>
        </nav>
    </header>

    <div class="empleados">
        <form action="server/registrar.php" name="registroempleado" method="POST" class="formulario" id="form-empleado">
        <div class="usuario">
            <h1>bienvenido empleado</h1>
            <h2>ingrese sus datos personales</h2>

            <div class="formulario__grupo-input " id="grupo__nombre">
                <input type="text"name="nombreempleado" id="nombre-empleado" placeholder="Nombre" required><span class="barra"></span>
                <label for="">nombre completo</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">El nombre debe tener minimamente 4 dígitos y un máximo de 50, no debe contener ni números ni simbolos</p>            
            </div>


            <div class="formulario__grupo-input" id="grupo__rol">
                <input type="text"name="rolempleado" id="rol-empleado" placeholder="rol en la empresa" required><span class="barra"></span>
                <label for="">rol en la empresa</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">El rol del empleado debe tener un máximo de 20 letras, no debe contener símbolos ni números</p>            

            </div>


            <div class="formulario__grupo-input" id="grupo__cinit">
                <input type="text"name="cinitempleado" id="cinit-empleado" placeholder="carnet empleado" required><span class="barra"></span>
                <label for="">carnet o nit</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">El CI solo debe contener números, sin espacios</p>            

            </div>


            <div class="formulario__grupo-input" id="grupo__correo">
                <input type="email"name="correoempleado" id="correo-empleado" placeholder="introduce tu correo" required><span class="barra"></span>
                <label for="">email</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">El correo debe contener un signo @.</p>            

            </div>


            <div class="formulario__grupo-input" id="grupo__contraseña">
                <input type="password" name="contraempleado" id="contraseña-empleado" placeholder="introduce tu contraseña" required><span class="barra"></span>
                <label for="">contraseña</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">La contraseña debe contener entre 4 a 16 digitos</p>            

            </div>


            <div class="nacimiento">
                <input type="date" name="nacimiento_empleado" id="nacimiento-empleado" required><span class="barra"></span>
                <label for="">fecha de nacimiento</label>
            </div>


            <button type="submit" name="enviar">regístrate</button>
            <br>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">datos almacenados correctamente</p>

        </div> 
        </form>

    </div>
    
    
    <?php

include("server/registrar.php");

?>
<script src="js/validaregempleado.js"></script>
</body>

</html>