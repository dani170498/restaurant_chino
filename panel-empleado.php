<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ěxīn de shíwù Exotic Chinese Food </title>
    <link rel="icon" type="image/png" href="images/homelo.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a2648292b1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <script defer src="js/index.js"></script>
</head>
<body class="panel__empleado">
    <header class="header">
        
        <nav class="nav">
            <button class="nav-toggle" aria-label="abrir menú"><i class="fa-solid fa-bars"></i></button>

                    <ul class="nav-menu ">
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Inicio</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Nuestros Platos</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Delivery</a></li>
                        <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link">Promociones</a></li>
                    </ul>

                    <ul class="nav-login">
                        <li class="nav-menu-item"><a href="" class="nav-login-link nav-link"><i class="fa-solid fa-user"></i></a></li>
                        <li class="nav-menu-item"><a href="" class="nav-login-link nav-link">cerrar sesión</a></li>
                    </ul>
        </nav>
    </header>

<div class="opciones__empleado" id="opciones__empleado">
    <h1 class="opciones__titulos">bienvenido!</h1>
    <h2 class="opciones__titulos">qué desea realizar?</h2>
    
         
            <div class="opciones__container-elementos" id="opciones__container-elementos">
            <div class="opciones__container-empleados" id="opcion-1">
                <a href="">
                    <i class="fa-solid fa-file-lines opciones__icono"></i>
                <br>

                </a>
                <span class="opciones__texto">ver historial de ventas</span>
            </div>

       

        
            <div class="opciones__container-empleados" id="opcion-2">
                <a href="">
                    <i class="fa-solid fa-boxes-stacked opciones__icono"></i>
                                    <br>

                </a>
                <span class="opciones__texto">seguimiento de inventario de productos</span>
            </div>


                       

               


                    <div class="opciones__container-empleados" id="opcion-2-1">
                        <a id="boton__adicionar" href="#registrar__producto">
                            <i class="fas fa-plus opciones__icono"></i>    
                        </a>
                        <br>
                        <span class="opciones__texto">adicionar un producto</span>
                    </div> 

                    <div class="opciones__container-empleados" id="opcion-2-2">
                        <a href="">
                            <i class="fas fa-minus opciones__icono"></i>
                        </a>
                        <br>
                        <span class="opciones__texto">restar un producto</span>
                    </div> 
                </li>
            </ul>



            <div class="opciones__container-empleados" id="opcion-3-3">
                <a href="">
                    <i class="fa-solid fa-money-bill-transfer opciones__icono"></i>
                <br>

                </a>
                <span class="opciones__texto">realizar una venta</span>
        </div>

    </div>
</div>


    <dialog  class="adicionar__producto" name="adicionar__producto" id="adicionar__producto">


    <form action="" method="post" class="adicionar__form"name="registrar__producto" id="registrar__producto">

        <h1 class="adicionar__titulo">Agregar un producto</h1>

        <div class="adicionar__container-inputs">

            <input type="text" name="adicionar_nombre" id="adicionar__producto-nombre" class="adicionar__input" placeholder="Nombre del producto" required>
        </div>

        <div class="adicionar__container-inputs">
            <input type="text" name="adicionar_precio" id="adicionar__producto-precio" class="adicionar__input" placeholder="Precio del producto" required>
        </div>


        <div class="adicionar__container-inputs">
         
        <input type="file" name="adicionar_imagen" id="adicionar__producto-imagen" class="adicionar__imagen" placeholder="Imagen del producto"required>
        <span class="adicionar__texto">imagen del producto</span>  
    </div>


        <button type="submit" class="adicionar__boton">Agregar</button>
<br>
        <a href="" id="cerrar__ventana" class="cerrar__ventana"> Cerrar ventana</a>

    </form>



    </dialog>

</body>
</html>