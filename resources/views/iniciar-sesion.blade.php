<!doctype html>
<html lang="es">

  @include('header')

  <body class="bg-intranet">
    <div class="centrar-intranet">
      <div class="acceso-intranet">
        <div class="bg-img-acceso bg-persona"></div>
        <div class="espacio-acceso-intranet">
          <div class="accesos-derecha"><a href="index-free.php"><img src="img/logo-blanco-intranet.png"></a></div>
          <form class="intranet-accesos" action="free-planes.php" method="post">
            <h2>MI CUENTA</h2>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-landing">INGRESAR</button>
          </form>
          <div class="accesos-derecha">
            <a href="#">Olvidaste tu contraseña</a><!-- | <a href="crear-cuenta.php">Crear Cuenta</a>-->
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
