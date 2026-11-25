<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Vector de 4 valores</title>
</head>
<body>

   <h2>Capturar 4 valores en un vector</h2>
   <form method="POST">
      <label>Introduce un valor:</label>
      <input type="number" name="valor" id="valor" required>
      <button type="button" onclick="agregar()">Agregar</button>
      <input type="hidden" name="valores" id="valores">
      <br><br>
      <p id="mensaje">Valores capturados: 0 de 4</p>
      <button type="submit" name="guardar" id="guardar" disabled>
         Guardar vector
      <button type="submit" name="mostrar" id="mostrar" disabled>
         Mostrar vector
      </button>
   </form> 
   <script>

      let vector=[];
      function agregar(){
         let dato = document.getElementById("valor").value;
         if(dato== ""){
            alert("Introduce un valor");
            return;
         }
         if(vector.length<4){
            vector.push(dato);
            document.getElementById("valores").value=JSON.stringify(vector);
            document.getElementById("valor").value="";
            document.getElementById("mensaje").innerHTML="Valores capturados: "+ vector.length+"de 4";
            if(vector.length ==4){
               document.getElementById("guardar").disabled=false;
               document.getElementById("mostrar").disabled=false;
               document.getElementById("mensaje").innerHTML="¡YA capturaste los 4 valores!";
            }
         }

      }
   </script>
   <?php
   if(isset($_POST['guardar'])){
      $vector=json_decode($_POST['valores'],true);
}

        if(isset($_POST['mostrar'])){
      $vector=json_decode($_POST['valores'],true);
      echo"<h3>Contenido del vector:</h3>";
      for($i=0;$i<4;$i++){
         echo"67" ;}
      }
   ?>
</body>
</html>