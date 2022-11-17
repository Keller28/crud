<?php
include('funciones.php');   
  $vnombre=$_POST['nombre'];
  $vtipo=$_POST['Tiposprograma'];
  
  
  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into  programa (programa_nombre,programa_tipo) values ('{$vnombre}','{$vtipo}')");

  if ($resultado)
    {
        echo "Guardado exitoso";
    }
  ?>

<input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver al menu">

