<!doctype html>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Login</title>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
                
                <div id="div3">
                    <form id="formulario" method="post" action="menu.php">
                        <br>
                        <strong class="lgris">Ingrese su usuario y contraseña para iniciar sesión</strong>
                        <br>
                        <label class="lgris">Nombre de Usuario:</label>
                        <br>
                        <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                        <br>
                        <label class="lgris">Contraseña:</label>
                        <br>
                        <input type="password" name="clave" value="" required/>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Iniciar sesión">
                    
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
    </body>
</html>