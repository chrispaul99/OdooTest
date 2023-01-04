<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../Template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../Template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../Template/index2.html"><b>Sistema de Productos</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <div class="col-auto text-center">
        <span class="fas fa-user fa-5x text-primary"></span>
    </div>
      <p class="login-box-msg">Inicia Sesión para acceder al Sistema</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Usuario" name="txtuser" id="txtuser">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Contraseña" name="txtpass" id="txtpass">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Recordarme
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button class="btn btn-primary btn-block" onclick="VerificarUsuario()">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
      <p class="mb-1">
        <a href="../../Views/forgot-password.php">¿Olvidaste tu contraseña?</a>
      </p>
      <p class="mb-0">
        <a href="../../Views/register.php" class="text-center">Crear nueva cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script src="../../Template/plugins/sweetalert2/sweetalert2.js"></script>
<!-- jQuery -->
<script src="../../Template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../Template/dist/js/adminlte.min.js"></script>




<script src="../../Providers/user.js"></script>

</body>
</html>
