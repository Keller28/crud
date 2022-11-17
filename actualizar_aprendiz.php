<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombres=strtoupper($_POST['nombres']);
  $vapellidos=strtoupper($_POST['apellidos']);
  $vdireccion=strtoupper($_POST['direccion']);
  $vtelefono=$_POST['telefono'];

  $miconexion=conectar_bd('', 'sena_bd');
  $resulado=consulta($miconexion,"update aprindices set apre_nombres='{$vnombres}',apre_apellidos='{$vapellidos}',apre_direccion='
  {$vdireccion}',apre_telefono='{$vtelefono}' where apre_id='{$vide}'");

  if ($miconexion->affected_rows>0)
  {
      echo "Actualizacion exitosa";
  }
?>

<input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
