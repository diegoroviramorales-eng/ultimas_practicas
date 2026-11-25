<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Guardar informacion en un archivo</title>
</head>
<body>
<h2>Guardar informacion en un archivo</h2>
<?php
$nombre= "ana lopez";
file_put_contents("alumnos.txt", $nombre . PHP_EOL,FILE_APPEND);
echo "informacion guardada correctamente.";
echo "<br><br>";
echo "Alumno agregado correctamente";
echo "<br><br>";
$contenido=file_get_contents("alumnos.txt");
echo nl2br($contenido);
   ?>
</body>
</html>