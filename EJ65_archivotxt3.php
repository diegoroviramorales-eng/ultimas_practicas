<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Vector de 4 valores</title>
</head>
<body>

   <h2>Capturar 4 valores en un vector</h2>
   <form method="POST">
      <label>Nombre del alumno:</label>
      <input type="text" name="nombre">
       <br>
       <label>pasatiempos:</label>
      <input type="text" name="pasatiempo">
       <br>
       <label>Edad:</label>
      <input type="number" name="edad">
      <button type="submit" name="guardar">guardar</button>
      <button type="submit" name="delete_Nombre">delete_Nombre</button>
      <button type="submit" name="delete_Edad">delete_Edad</button>
      <button type="submit" name="delete_Pasatiempo">delete_Pasatiempo</button>
      <button type="submit" name="delete_todo">delete_todo</button>
   </form> 
   <?php
   if(isset($_POST['delete_Nombre'])){
       $archivo = "programacionA.txt";

       if (file_exists($archivo)) {
         unlink($archivo);
          echo "archivo eliminado";}
       else {
          echo "el archivo no existe";
            }
         }
            if(isset($_POST['delete_Pasatiempos'])){
       $archivo = "programacionB.txt";

       if (file_exists($archivo)) {
         unlink($archivo);
          echo "archivo eliminado";}
       else {
          echo "el archivo no existe";
            }
         }

   if(isset($_POST['delete_Edad'])){
       $archivo = "programacionC.txt";

       if (file_exists($archivo)) {
         unlink($archivo);
          echo "archivo eliminado";}
       else {
          echo "el archivo no existe";
            }
         }

          if(isset($_POST['delete_todo'])){
       $archivo ="programacionA.txt";"programacionB.txt";"programacionC.txt";

       if (file_exists($archivo)) {
         unlink($archivo);
          echo "archivo eliminado";}
       else {
          echo "el archivo no existe";
            }
         }

  if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
      file_put_contents("programacionA.txt", $nombre . PHP_EOL,FILE_APPEND);
      echo "<p>Nombre guardado correctamente.<p>";
    $pasatiempo=$_POST['pasatiempo'];
      file_put_contents("programacionB.txt", $pasatiempo . PHP_EOL,FILE_APPEND);
      echo "<p>pasatiempo guardado correctamente.<p>";
    $edad=$_POST['edad'];
      file_put_contents("programacionC.txt", $edad . PHP_EOL,FILE_APPEND);
      echo "<p>Edad guardada correctamente.<p>";}
    ?>
      <h3>Lista de alumnos de 3Aregistrados </h3>
         <?php
       if(file_exists("programacionA.txt")){
      $contenido =  file_get_contents("programacionA.txt");
       echo nl2br($contenido);}
      else
         {echo "no existe registros.";}

       if(file_exists("programacionB.txt")){
      $contenido =  file_get_contents("programacionB.txt");
       echo nl2br($contenido);}
      else
         {echo "no existe registros.";}

       if(file_exists("programacionC.txt")){
      $contenido =  file_get_contents("programacionC.txt");
       echo nl2br($contenido);}
      else
         {echo "no existe registros.";}
    ?>
</body>
</html>