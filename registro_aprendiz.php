<!doctype html>
<html>
  <head>
    <title>Registro de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
    

  </head>
  <body>
    <div id="div1regi" class="container">
        <br>
        <div id="div2regi">
           <?php session_start(); if(! empty($_SESSION['Tipo_usuario']))  ?> 
           <div id="div3registro">
           <?php
             if($_SESSION['Tipo_usuario']='Admin')
             {
             ?>
             <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
              <div class="cold-md-12">
                <strong class="regisldat">Ingrese los datos del aprendiz</strong>
                <br>
                <label class="regisl">Identificacion:</label>
                <div class="form-row">

                <div class="form-group col-xs-2">
                 <select class="form-control" name="tipoid">
                    <option value="CC" selected>CC</option>
                    <option value="TI">TI</option>
                    <option value="RC">RC</option>
                    <option value="PEP">PEP</option>
                 </select>
              </div>
                 <div class="form-group col-md-6">
                        <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999" value="" placeholder="IDENTIFICACIÓN" required/>
                </div>
                </div>
                 
                 <label class="regisl">Nombres:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>

                 <label class="regisl">Apellidos:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>
                 
                 <label class="regisl">Dirección:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="" placeholder="DIRECCIÓN" required/>
                 
                 <label class="regisl">Teléfono:</label>
                <input class="form-control" type="number" name="telefono" min="9999" max="9999999999" value="" placeholder="TELÉFONO" required/>
                <br>
                <label class="regisl">Ficha:</label>
                <div class="form-group col-xs-2">
                <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','sena_bd');
                                $consulta = "SELECT * FROM fichas";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                  <select class="form-control" name="fic">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->ficha_numero;?>"><?php echo $opcion->ficha_numero;?></option>
                                    <?php } ?>
                  </select>
                <br>
                <input class="btn btn-primary" type="submit" value="Guardar">
                <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
              </div>
             </form>
            <?php
             }
             else
             {
                 echo "No tiene permisos para realizar esta acción";
             }
            ?>
            <br>
           </div>
        </div>
    </div>
  </body>
</html>