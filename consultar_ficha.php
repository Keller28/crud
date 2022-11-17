<!DOCTYPE html>
<html>
  <head>
    <title>Consulta de ficha</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="divconsulta" class="container">
      <br>
      <div id="div2">
        <div id="div4">
            <form name="formulario" role="form" method="post">
              <div class="col-md-12">
                <strong class="lgris">Ingrese criterio de busqueda</strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group cold-md-3">
                 <input class="form-control" type="number" name="nombre" min="9999" max="9999999999" value="" placeholder="Número" required/>
                 </div>
                 <div class="form-group col-md-3">
                 <input class="btn btn-primary" type="submit" value="Consultar Programa" >
                 <input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
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
          $vnombre=$_POST['nombre'];
          $miconexion=conectar_bd('', 'sena_bd');
          $resultado=consulta($miconexion,"select * from fichas, programa where ficha_programa=programa_id and trim(ficha_numero) like '%{$vnombre}%'");
          if($resultado->num_rows>0)
            {
              while ($fila = $resultado->fetch_object())
                {
                  echo "Ficha: ".$fila->ficha_numero."<br>"."Nombre del Programa: ".$fila->programa_nombre."<br>";
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