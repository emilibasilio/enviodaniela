<?php

include('Operaciones.php');
 $total=0;
 
 if(isset($_GET['n1']))
 {
      $Objeto=new Operaciones();

      $n1=$_GET['n1'];
      $n2=$_GET['n2'];
      $n3=$_GET['n3'];
      $n4=$_GET['n4'];
      $n5=$_GET['n5'];
     
       
      $op=$_GET['opcion'];
    if($op=='mayor')
   {
    $total=$Objeto-> Mayor($n1,$n2,$n3,$n4,$n5);
   }
   else if($op=='menor')
   {
    $total=$Objeto-> Menor($n1,$n2,$n3,$n4,$n5);
   }
   
 }
 
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet"type="text/css" href="css/App.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body bgcolor="#ECEAF3">

  <div  class="encabezado">
    <h2 align="center" > Calculo de número de mayor o menor</h2>

  </div>

  <br><br>

  <form method="get" action="index.php">
    <div class="row">
    
      <br>
      <div class="input-field col s2">
        <input name="n1" id="n1" type="number" class="validate">
        <label class="active" for="n1">Primer Valor</label>
      </div>
     
      <div class="input-field col s2">
        <input name="n2" id="n2" type="number" class="validate">
        <label class="active" for="n2">Segundo Valor</label>
      </div>
      <div class="input-field col s2">
        <input name="n3" id="n3" type="number" class="validate">
        <label class="active" for="n3">Tercer Valor</label>
      </div>
      <div class="input-field col s2">
        <input name="n4" id="n4" type="number" class="validate">
        <label class="active" for="n4">Cuarto Valor</label>
      </div>
      <div class="input-field col s2">
        <input name="n5" id="n5" type="number" class="validate">
        <label class="active" for="n5">Quinto Valor</label>
      </div>
  
      <br><br>
    <div class="input-field col s6">
      <label>Opciones</label>
      <br>
      <select name="opcion" class="browser-default">
        <option value="mayor"> Mayor </option>
        <option value="menor"> Menor</option>
      
      </select>
    </div>
    <br><br>
    <div class="container">
      <input type="submit" value="Operar" class="waves-effect waves-light btn">

    </div>
   
  </form>
  <?php
   
     echo '<h2 align= "center" class="texto"> El resultado es: ' .$total. '<h2>';
  ?>

  <form method="get" action="index.php">
  <div class="container" align="center">
     <input type="hidden" name="limpiar" value="1">
      <input type="submit" value="Limpiar" class="waves-effect waves-light btn">

    </div>
</form>
  
<script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  </script>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>

