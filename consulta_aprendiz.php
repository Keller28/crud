<!DOCTYPE html>
<html>
  <head>
    <title>Consulta de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="divconsulta" class="container">
      <br>
      <div id="div2consulta">
        <div id="div4">
            <form name="formulario" role="form" method="post">
              <div class="col-md-12">
                <strong class="ingapre">Ingrese criterio de busqueda</strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group col-md-3">
                 <input class="form-control" type="number" name="numid" min="9999" max="9999999999" value="" placeholder="IDENTIFICACIÓN" />
                 </div>
                 <div class="form-group cold-md-3">
                  <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" />
                 </div>
                 <div class="form-group col-md-3">
                  <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" />
                 </div>
                 <div class="form-group col-md-3">
                 <input class="btn btn-primary" type="submit" value="Consultar" >
                 <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
                 </div>
                </div>
                <br>
              </div>
            </form>
            <br>
        </div>
        <div id="divconsulta2">
        <?php
        if ($_SERVER['REQUEST_METHOD']==='POST')
        {
          include('funciones.php');
          $vnumid=$_POST['numid'];
          $vnombres=$_POST['nombres'];
          $vapellidos=$_POST['apellidos'];
          $miconexion=conectar_bd('', 'sena_bd');
          $resultado=consulta($miconexion,"select * from aprindices where trim(Apre_numid) like '%{$vnumid}%' and (trim(Apre_nombres) like '%{$vnombres}%' and trim(Apre_apellidos) like '%{$vapellidos}%')");
          if($resultado->num_rows>0)
            {
              while ($fila = $resultado->fetch_object())
                {
                  echo "id: ".$fila->apre_id."<br>"."Tipo de id: ".$fila->apre_tipoid."<br>"."Numero de identificacion: ".$fila->apre_numid."<br>"."Nombres: ".$fila->apre_nombres."<br>"."Apellidos: ".$fila->apre_apellidos."<br>"."Direccion: ".$fila->apre_direccion."<br>"."Telefono: ".$fila->apre_telefono."<br>"."Ficha: ".$fila->apre_ficha."<br>";
                }
            }
          else{
            echo "No existen registros";
              }  
          $miconexion->close();
        }?>
        </div>
      </div>
    </div>
  </body>
</html>