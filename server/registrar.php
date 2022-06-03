<?php
    include("server/conexion.php");

if (isset($conex)){
    echo "conexion exitosa";
}
else{
    echo "conexion fallida";
}
if(isset($_POST['enviar'])){
    if (strlen($_POST['nombreempleado']) >= 1 && strlen($_POST['rolempleado']) >= 1    
    && strlen($_POST['cinitempleado']) >= 1 && strlen($_POST['correoempleado']) >= 1
    && strlen($_POST['contraempleado']) >= 1 && strlen($_POST['nacimiento_empleado']) >= 1){

        $nombre=$_POST['nombreempleado'];
        $rol=$_POST['rolempleado'];
        $cinit=$_POST['cinitempleado'];
        $correo=$_POST['correoempleado'];
        $contra=$_POST['contraempleado'];
        $nacimiento=date("d/m/y",strtotime($_POST['nacimiento_empleado']));
        $ingreso=date("d/m/y");
        
        //consulta para registrar el empleado
        
        $consulta="INSERT INTO empleados(nombre_empleado, rol_empleado, ci_empleado, correo_empleado, contra_empleado, nacimiento_empleado, ingreso_empleado) VALUES ('$nombre','$rol','$cinit','$correo','$contra','$nacimiento','$ingreso')";

        $resultado=mysqli_query($conex,$consulta);

        if($resultado){

            ?>

            <h3>Empleado registrado con exito</h3>
            <?php

        }else{
              
                ?>
    
                <h3>No se pudo registrar el empleado</h3>
                <?php
    
        }
    }


}
?>