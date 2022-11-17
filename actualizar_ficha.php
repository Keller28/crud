<?php
  include('funciones.php');
  session_start();
  $vnombre=$_POST['nombre'];
  $vfp=$_POST['fp'];


  $miconexion=conectar_bd('', 'sena_bd');
  $resulado=consulta($miconexion,"update fichas set ficha_programa='{$vfp}' where ficha_numero='{$vnombre}'");

  if ($miconexion->affected_rows>0)
  {
      echo "Actualizacion exitosa";
  }
?>

<input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
