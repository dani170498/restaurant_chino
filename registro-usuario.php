<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios </title>
    <link rel="shortcut icon" href="images/homelo.png" type="image/x-icon">
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
                        <li class="nav-menu-item"><a href="index.html" class="nav-menu-link nav-link">Inicio</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">plataforma empleados</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Delivery</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Promociones</a></li>
                    </ul>

                    <ul class="nav-login">
                        <li class="nav-menu-item"><a href="login-user.html" class="nav-login-link nav-link">iniciar sesión</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-login-link nav-link">regístrate</a></li>
                    </ul>
        </nav>
    </header>

    </div>
    <div class="usuarios">
        <form action="" method="POST" id="formulario-usuario">
        <div class="usuario">
            <h1>bienvenido</h1>
            <h2>ingrese sus datos personales</h2>


            <div class="formulario__grupo-input" id="grupo__nombre">
                <input type="text" name="nombre-usuario" id="nombre-usuario" placeholder="introduzca su nombre" required><span class="barra"></span>
                <label for="">nombre completo</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">El nombre debe tener minimamente 4 dígitos y un máximo de 50, no debe contener ni números ni simbolos</p>            

            </div>


            <div class="formulario__grupo-input" id="grupo__cinit">
                <input type="text"name="cinit-usuario" id="cinit-usuario" placeholder="introduzca su carnet o nit" required><span class="barra"></span>
                <label for="">carnet o nit</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">El CI o NIT solo debe contener de 4 a 16 números, sin espacios</p>            

            </div>


            <div class="formulario__grupo-input" id="grupo__correo">
                <input type="email"name="correo-usuario" id="correo-usuario" placeholder="introduzca su email" required><span class="barra"></span>
                <label for="">email</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">El correo debe contener un signo @.</p>            

            </div>


            <div class="formulario__grupo-input" id="grupo__contraseña">
                <input type="password" name="contraseña-usuario" id="contraseña-usuario" placeholder="introduzca su contraseña" required><span class="barra"></span>
                <label for="">contraseña</label>
                <i class="formulario__validacion-estado fa fa-times-circle"></i>
                <p class="formulario__grupo-input-error">La contraseña debe contener entre 4 a 16 digitos</p>            

            </div>


            <div class="nacimiento">
                <input type="date" name="" id="nacimiento-usuario" required><span class="barra"></span>
                <label for="">fecha de nacimiento</label>

            </div>


            <button type="submit">registrate</button>


            <p class="formulario__inicia">tienes una cuenta? <a href="registro-usuario.html">inicia sesión</a></p>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">datos almacenados correctamente</p>
        </div>    
        </form>
    </div>
    <script src="js/validaregusuario.js"></script>

</body>
</html>