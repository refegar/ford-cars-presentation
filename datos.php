<?php
// Aqui debo escribir codigo PHP
/*  
Esto 
es un bloque 
de codigo de
 comentario

*/
//PHP nos ofrece variables super globales
// una que se llama $_GET y $_POST

// var_dump($_POST)

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
//var_dump($nombre);
//var_dump($apellido);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos De PHP</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>

<h1 class="titulo">

gracia por enviar sus comentarios

</h1>
<h2>
    pronto nos pondremos en contacto con usted
</h2>
<h2>estimado@
<?php 
echo $nombre .' '. $apellido;

?>
</h2>

<br>
<a href="index.html">volver a inicio</a>
    
</body>
</html>