<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Alquiladora</title>
</head>
<body>
  
  <div class="header">
    <img src="" alt="" width="100px" height="100px">
    <h1 class="title">PRUEBA DE PAGINA</h1>
  </div><!--div header-->
    <div class="form">
      <div class="btn-div">
        <input type="button" value="Administrador" onclick="admin()" class="button"><!--btn-admin-->
        <input type="button" value="Cliente" onclick="user()" class="button"><!--btn-user-->
      </div>
        <div class="admin" id="admin">
          <input type="button" value="Iniciar Sesión" onclick="sing_up()" class="btn_sing_up"><!--btn sing-up-->
            <div class="login-box" id="sing_up">
              <h2>Iniciar Sesión</h2>
              <form method="post" action="">
              <?php
                include("../php/bd.php");
                include("../php/admin.php");
              ?>
                <div class="user-box"> 
                  <input type="text" name="usuario" class="input_text" autocomplete="off" maxlength="15" id="input-text">
                  <label>Usuario</label>
                </div><!--user-box-->
                <div class="user-box">
                  <input type="password" name="password" class="input_text" autocomplete="off" maxlength="10" id="input-text">
                  <label>Contraseña</label>
                </div><!--user-box-->
                <a href="">
                  <input type="submit" name="reg">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </form>
            </div><!--div sing-up-->
        </div><!--div admin-->

        <div class="user" id="user">
          <input type="button" value="Registrarse" onclick="sing_in1()" class="btn_sing_in1">
          <input type="button" value="Iniciar Sesión" onclick="sing_up1()" class="btn_sing_up1">
            <div class="login-box" id="sing_in1">
              <h2>Registro</h2>
              <form action="">
                <div class="user-box">
                  <input type="text" class="input_text" autocomplete="off" maxlength="10" id="input-text">
                  <label>Nombre</label>
                </div><!--user-box-->
                <div class="user-box">
                  <input type="text" class="input_text" autocomplete="off" maxlength="10" id="input-text">
                  <label>Apellidos</label>
                </div><!--user-box-->
                <div class="user-box">
                  <input type="text" class="input_text" autocomplete="off" maxlength="10" id="input-text">
                  <label>Numero Telefónico</label>
                </div><!--user-box-->               
                <div class="user-box">
                  <input type="password" class="input_text" autocomplete="off" maxlength="10" id="input-text">
                  <label>Contraseña</label>
                </div><!--user-box-->
                <a href="#">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Registrarse
                </a>
              </form>
            </div><!--div sing-in-->

            <div class="login-box" id="sing_up1">
              <h2>Iniciar Sesión</h2>
              <form action="">
                <div class="user-box">
                  <input type="text" class="input_text" autocomplete="off" maxlength="10" id="input-text">
                  <label>Usuario</label>
                </div><!--user-box-->
                <div class="user-box">
                  <input type="password" class="input_text" autocomplete="off" maxlength="10" id="input-text">
                  <label>Contraseña</label>
                </div><!--user-box-->
                <a href="cliente.html">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Iniciar Sesión
                </a>
              </form>
            </div><!--div sing-up-->
        </div><!--div user-->
    </div><!--div form-->
    <script src="../js/index.js"></script>
</body>
</html>