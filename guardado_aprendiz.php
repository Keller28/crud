<?php
include('funciones.php');   
  $vtipoid=$_POST['tipoid'];
  $vnumid=$_POST['numid'];
  $vnombres=$_POST['nombres'];
  $vapellidos=$_POST['apellidos'];
  $vdireccion=$_POST['direccion'];
  $vtelefono=$_POST['telefono'];
  $vficha=$_POST['fic'];

  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into aprindices (apre_tipoid,apre_numid,
  apre_nombres,apre_apellidos,apre_direccion,apre_telefono,apre_ficha) values 
  ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");

  if ($resultado)
    {
        echo "Guardado exitoso";
    }
  ?>
   <input style="width: 4%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">