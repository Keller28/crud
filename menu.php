<?php
include('funciones.php');
session_start();
if (!isset($_SESSION['nusuario']))
{
    $_SESSION['nusuario']=$_POST['usuario'];
    $_SESSION['nclave']=$_POST['clave'];
}

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"select * from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}'");
?>
<!doctype html>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Menu principal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
                <?php if($resultado->num_rows>0) ?> 
                <div id="div3menu">
                    <?php
                      if($resultado->num_rows>0)
                      {
                          $fila = $resultado->fetch_object();
                          $_SESSION['Tipo_usuario']=$fila->usua_tipo;
                        ?>
                        <label class="biemenu">Bienvenido <?php echo $_SESSION['nusuario'] ?></label><br>

                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='registro_aprendiz.php'" value="Registro de aprendices">
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='consulta_aprendiz.php'" value="Consulta de aprendices">
                        <br><br>
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='modificar_aprendiz.php'" value="Actualizacion de aprendices">
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='borrar_aprendiz.php'" value="Borar aprendices">
                        <br><br>
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='crear_programa.php'" value="Crear programa">
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='consultar_programa.php'" value="Consultar programa">
                        <br><br>
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='modificar_programa.php'" value="Modificar programa">
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='borrar_programa.php'" value="Eliminar programa">
                        <br><br>
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='crear_ficha.php'" value="Crear ficha">
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='consultar_ficha.php'" value="Consultar ficha">
                        <br><br>
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='modificar_ficha.php'" value="Modificar ficha">
                        <input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='borrar_ficha.php'" value="Eliminar ficha">
                        <br><br>
                        <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='index.php'" value="salir">
                    <?php
                      }
                      else
                      {
                          echo "Usuario o clave invalido";
                      }
                    $miconexion->close();
                     ?>
                    <br><br>
                    
                </div>
            </div>
        </div>
    </body>
</html>