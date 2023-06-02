<?php include "./includes/conexion.php";?>
<?php
//funcion con clausula JOIN 
function showAllData()  {
    global $conexion;
    $query = "SELECT reservas.id_usuario, reservas.id_equipos, reservas.id_sede, prestamos.id_usuario, prestamos.id_equipos, prestamos.id_sede, mantenimiento.id_equipos, estadisticas.id_equipos, usuarios.id_usuario, sedes.id_sede, reservas.id_reservas, prestamos.id_prestamo, mantenimiento.id_mantenimiento, estadisticas.id_estadistica, equipos.id_equipos
            FROM reservas
            JOIN usuarios ON reservas.id_usuario = usuarios.id_usuario
            JOIN equipos ON reservas.id_equipos = equipos.id_equipos
            JOIN sedes ON reservas.id_sede = sedes.id_sede
            JOIN prestamos ON prestamos.id_usuario = usuarios.id_usuario AND prestamos.id_equipos = equipos.id_equipos AND prestamos.id_sede = sedes.id_sede
            LEFT JOIN mantenimiento ON mantenimiento.id_equipos = equipos.id_equipos
            LEFT JOIN estadisticas ON estadisticas.id_equipos = equipos.id_equipos
            ";
    
    $result = mysqli_query($conexion, $query);
    
    if(!$result) {
        die ('NO SE CONECTO A LA BASE DE DATOS' . mysqli_error($conexion));
    }
        while($row = mysqli_fetch_assoc($result) > 0) {
            $id=
            $id_usuario = $row ['id_usuario'];
            $id_reservas = $row ['id_reservas'];
            $id_equipos = $row ['id_equipos'];
            $id_sede = $row ['id_sede'];
            $id_estadisticas = $row ['id_estadisticas'];
            $id_mantenimiento = $row ['id_mantenimiento'];
            $id_prestamo = $row ['id_prestamo'];
            
            print "<option value= '$id_equipos' >$id</option>";
         
        }  

}
    

    
//     // Obtención de los datos de la consulta SQL
// if (mysqli_num_rows($resultado) > 0) {
//     while ($fila = mysqli_fetch_assoc($resultado)) {
//         echo "Columna 1: " . $fila["columna1"] . " - Columna 2: " . $fila["columna2"] . " - Columna 3: " . $fila["columna3"] . "<br>";
//     }
// } else {
//     echo "No se encontraron resultados";
// }

// // Cierre de la conexión a la base de datos
// mysqli_close($conexion);

    
    
    
    // }
    // while($row = mysqli_fetch_assoc($result)) {
       
    //     $id_usuario = $row ['id_usuario'];
    //     $id_reservas = $row ['id_reservas'];
    //     $id_equipos = $row ['id_equipos'];
    //     $id_sede = $row ['id_sede'];
    //     $id_estadisticas = $row ['id_estadisticas'];
    //     $id_mantenimiento = $row ['id_mantenimiento'];
    //     $id_prestamo = $row ['id_prestamo'];
    //     print"<option value= '$id_usuario' >$id_usuario</option>";
    //     print"<option value= '$id_reservas' >$id_reservas</option>";
    //     print"<option value= '$id_equipos' >$id_equipos</option>";
    //     print"<option value= '$id_sede' >$id_sede</option>";
    //     print"<option value= '$id_estadisticas' >$id_estadisticas</option>";
    //     print"<option value= '$id_mantenimiento' >$id_mantenimiento</option>";
    //     print"<option value= '$id_prestamo' >$id_prestamo</option>";
    // }  
     // $nombre=$_POST['nombre'];
        // $apellido=$_POST['apellido'];
        // $direccion=$_POST['direccion'];
        // $telefono=$_POST['telefono'];
        // $correo_electronico=$_POST['correo_electronico'];
        // $tipo_usuario=$_POST['tipo_usuario'];

//}

function insert_rows(){
    if(isset($_POST['submit'])){
    global $conexion;
    $id_usuario=$_POST['id_usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correo_electronico=$_POST['correo_electronico'];
    $tipo_usuario=$_POST['tipo_usuario'];

    $query="INSERT INTO usuarios(id_usuario,nombre,apellido,direccion,telefono,correo_electronico,tipo_usuario)";
    $query.="VALUES ('$id_usuario','$nombre','$apellido','$direccion',$telefono,'$correo_electronico','$tipo_usuario')";
    $result=mysqli_query($conexion,$query);
     if(isset($result)){
        echo "<h1 style='color: blue;>'Datos insertados en la Base de Datos</h1>";

     }
     else{

        echo "<h1 class='h1'style='color:purple;'>No se ingresaron Datos</h1>";
     }

    }

}
function Insert_Datos(){
global $conexion;
//TABLA USUARIOS   
    if(isset($_POST['formUsuarios'])){

    $id_usuario=$_POST['id_usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correo_electronico=$_POST['correo_electronico'];
    $tipo_usuario=$_POST['tipo_usuario'];

    $query1 = "INSERT INTO usuarios (id_usuario,nombre,apellido,direccion,telefono,correo_electronico,tipo_usuario) VALUES ('$id_usuario','$nombre','$apellido','$direccion',$telefono,'$correo_electronico','$tipo_usuario')"; 
    mysqli_query($conexion,$query1);
    echo "<h1 style='color: white;'> Datos ingresados con exito¡¡</h1>";
    }
    
//TABLA SEDES
if(isset($_POST['formSedes'])){
    
    $id_sede=$_POST['id_sede'];
    $nombre_sede=$_POST['nombre_sede'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
   
    $query2 = "INSERT INTO sedes (id_sede,nombre_sede,direccion,telefono) VALUES ('$id_sede','$nombre_sede','$direccion','$telefono')";
    mysqli_query($conexion,$query2);
    echo "<h1> Datosingresados con exito</h1>";
}
//TABLA RESERVAS
if(isset($_POST['formReservas'])){
   
    $id_reservas=$_POST['id_reservas'];
    $id_usuario=$_POST['id_usuario'];
    $id_equipos=$_POST['id_equipos'];
    $id_sede=$_POST['id_sede'];
    $fecha_reserva=$_POST['fecha_reserva'];
    $fecha_vencimiento=$_POST['fecha_vencimiento'];

    $query3 = "INSERT INTO reservas (id_reservas,id_usuario,id_equipos,id_sede,fecha_reserva,fecha_vencimiento) VALUES ('$id_reservas','$id_usuario','$id_equipos','$id_sede','$fecha_reserva','$fecha_vencimiento')";
    $result=mysqli_query($conexion,$query3);
    echo "<h1> Datosingresados con exito</h1>";
    }
//TABLAS PRESTAMOS
if(isset($_POST['formPrestamos'])){
    
    $id_prestamo=$_POST['id_prestamo'];
    $id_usuario=$_POST['id_usuario'];
    $id_equipos=$_POST['id_equipos'];
    $id_sede=$_POST['id_sede'];
    $fecha_prestamo=$_POST['fecha_prestamo'];
    $fecha_entrega=$_POST['fecha_entrega'];

    $query4 = "INSERT INTO prestamos (id_prestamo,id_usuario,id_equipos,id_sede,fecha_prestamo,fecha_entrega) VALUES ('$id_prestamo','$id_usuario','$id_equipos','$id_sede','$fecha_prestamo','$fecha_entrega')";
    mysqli_query($conexion,$query4);
    echo "<h1> Datosingresados con exito</h1>";
   
    }
//TABLA MANTENIMIENTO
if(isset($_POST['formMantenimiento'])){
    $id_mantenimiento=$_POST['id_mantenimiento'];
    $id_equipos=$_POST['id_equipos'];
    $fecha_mantenimiento=$_POST['fecha_mantenimiento'];
    $descripcion=$_POST['descripcion'];

    $query5 = "INSERT INTO mantenimiento (id_mantenimiento,id_equipos,fecha_mantenimiento,descripcion) VALUES ('$id_mantenimiento','$id_equipos','$fecha_mantenimiento','$descripcion')";
    mysqli_query($conexion,$query5);
    echo "<h1> Datosingresados con exito</h1>";
}
//TABLA ESTADISTICAS
if(isset($_POST['formEstadisticas'])){
     $id_estadisticas=$_POST['id_estadisticas'];
     $id_equipos=$_POST['id_equipos'];
     $id_sede=$_POST['id_sede'];
     $año=$_POST['año'];
     $mes=$_POST['mes'];
     $cantidad_prestamos=$_POST['cantidad_prestamos'];

     $query6 = "INSERT INTO estadisticas (id_estadisticas,id_equipos,id_sede,año,mes,cantidad_prestamos) VALUES ('$id_estadisticas','$id_equipos','$id_sede','$año','$mes','$cantidad_prestamos')";
     mysqli_query($conexion,$query6);
     echo "<h1> Datosingresados con exito</h1>";
}
//TABLA EQUIPOS
if(isset($_POST['formEquipos'])){
      $id_equipos=$_POST['id_equipos'];
      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];
      $tipo=$_POST['tipo'];
      $estado=$_POST['estado'];
 
      $query7 = "INSERT INTO equipos (id_equipos,marca,modelo,tipo,estado) VALUES ('$id_equipos','$marca','$modelo','$tipo','$estado')";
      mysqli_query($conexion,$query7);
      echo "<h1> Datosingresados con exito</h1>";  
    }


}
    


?>