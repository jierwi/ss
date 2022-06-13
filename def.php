<?php
/*ESTABLECER LA SESION, UNA VEZ CREADA*/
session_start();
$_SESSION['nom'];

/*CREAR SESION*/
$n1 = $nombre;
$_SESSION['nom'] = $n1;
$c1 = $contra;
$_SESSION['cont'] = $c1;

/*ELIMINAR SESION*/
session_destroy();

/*SOLICITAR VARIABLE DE UN FORMULARIO*/
$nombre=$_REQUEST['nombre'];
						
/*CONECTAR CON EL SERVIDOR DE BBDD*/
$servidor = "localhost";
$usuario = "id18843915_root";
$contrasena = "19Ru18be17n*";
$basededatos = "id18843915_mydb";
$conexion = mysqli_connect( $servidor, $usuario, $contrasena);
$db = mysqli_select_db( $conexion, $basededatos );

/*CREAR UNA COOKIE*/
setcookie('cod','1');

/*REENVIAR A UNA PAGINA*/
header('location:index.php');

/*HACER UN SELECT*/
$consulta = "SELECT * FROM tabla WHERE si";
$resultado = mysqli_query( $conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado )){
$si=$columna[0];
}

/*HACER UN UPDATE*/
$consulta = "UPDATE tabla SET v1= 'v1', v2=v2 WHERE si";
$res = mysqli_query( $conexion, $consulta);

/*HACER UN INSERT*/
$sql = "INSERT INTO usuarios (nombre, email, contrasenya, activo) VALUES ('$nombre', '$correo', '$contra', '1')";
$resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");

/*CONCATENAR NOMBRES CON VARIABLES*/
src='$imagen"."$nombre.png'


?>