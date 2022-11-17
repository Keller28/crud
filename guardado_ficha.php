<?php
include('funciones.php');   
  $vnombre=$_POST['nombre'];
  $vprograma=$_POST['progra'];
  
  
  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into fichas (ficha_numero,ficha_programa) values ('{$vnombre}','{$vprograma}')");

  if ($resultado)
    {
        echo "Guardado exitoso";
    }
  ?>

<input style="width: 4%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">