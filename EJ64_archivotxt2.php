<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Vector de 4 valores</title>
</head>
<body>

   <h2>Capturar 4 valores en un vector</h2>
   <form method="POST">
      Nombre del alumno:
      <input type="text" name="nombre">
      <button type="button" name="guardar">guardar</button>
   </form> 
   <?php
  if(isset($_POST['guardar'])){
      $nombre=$_POST['nombre'];
      file_put_contents("programacionA.txt", $nombre . PHP_EOL,FILE_APPEND);
      echo "<p>Nombre guardado correctamente.<p>";}
    ?>
      <h3>Lista de alumnos de 3Aregistrados </h3>
         <?php
       if(file_exists("programacionA.txt")){
      $contenido =  file_get_contents("programacionA.txt");
       echo nl2br($contenido);}
      else
         {echo "no existe registros.";}
    ?>
</body>
</html>