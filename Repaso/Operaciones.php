<?php

      class Operaciones
      {  
          public function Mayor($a,$b,$c,$d,$e)
          {
            $m;
            if($a>$b && $a>$c && $a>$d && $a>$e)
            {
              $m=$a;
            }
            else if($b>$a && $b>$c && $b>$d && $b>$e)
            {
              $m=$b;
            }
            else if($c>$a && $c>$b && $c>$d && $c>$e)
            {
              $m=$c;
            }
            else if($d>$a && $d>$b && $d>$c && $d>$e)
            {
              $m=$d;
            }
            else 
            {
              $m=$e;
            }
            return $m;

          }
          public function Menor($a,$b,$c,$d,$e)
          {
            $n;
            if($a<$b && $a<$c && $a<$d && $a<$e)
            {
              $n=$a;
            }
            else if($b<$a && $b<$c && $b<$d && $b<$e)
            {
              $n=$b;
            }
            else if($c<$a && $c<$b && $c<$d && $c<$e)
            {
              $n=$c;
            }
            else if($d<$a && $d<$b && $d<$c && $d<$e)
            {
              $n=$d;
            }
            else 
            {
              $n=$e;
            }
            return $n;
            

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
  <title>Resultado</title>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>


     <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>