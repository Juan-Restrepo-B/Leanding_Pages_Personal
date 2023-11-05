<?php

$host = "localhost";
$user = "juanpres_Desarrollo";
$pass = "J20uan.2023*";
$database = "juanpres_sitio";

$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn)
{
	die("No ahi conexion:".mysqli_connect_error());
}

$base = mysqli_query ($conn, "SELECT * FROM form");
if(!$base){
    echo"No se encontro base de datos";
}

$nombre1=$_POST['first-name'];
$nombre2=$_POST['second-name'];
$apellido1=$_POST['first-apellido'];
$apellido2=$_POST['second-apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$descripcion=$_POST['descripcion'];
$file2=$_POST['file_2'];

$sql = "INSERT INTO form
        VALUES (null, '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$correo', '$telefono', '$descripcio', '$file2')";

$ejecutar = mysqli_query ($conn, $sql);
if(!$ejecutar){
    echo "Hubo un error al enviar el Formulario por favor vuelvalo a intentar";
}else {
    echo '<script language="javascript">alert("Formulario Enviado Correctamente");
    window.location.href="../index.html"</script>';
}

?>