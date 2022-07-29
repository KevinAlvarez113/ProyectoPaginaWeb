<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad Corporal</title>
</head>
<body>
<?php

if (isset ($_POST['nombres']) &&
    isset ($_POST['apellidos']) &&
    isset ($_POST['correo']) &&
    isset ($_POST['contraseña'])){
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];
      $contraseñas = $_POST['contraseña'];
      $correo = $_POST['correo'];
      

}else{
      echo "Por favor rellene todos los campos";
}

 $datos = "$nombres:$apellidos:$correo:$contraseñas\n" ;

           $archivo = fopen("Datos.txt" , "a");
           fwrite ($archivo,$datos);

           echo "Archivo.txt: $datos";

if (isset ($_POST['nombres'])) {
$nombre = $_POST['nombres'];
	echo "Gracias por Ingresar: " . $nombre . "<br>";
}

if(isset ($_POST['nombres'])){

if(strlen($nombres) > 20){
  echo ("El nombre es muy largo");
}
if(strlen($contraseñas) > 15){
  echo ("La contraseña es muy larga");
}
}

?>
</body>
</html>