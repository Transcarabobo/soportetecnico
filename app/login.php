<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="../img/favicon1.png">
    <title>CCO - LOGIN</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>


 </head>
  <body>
    <nav>
    <div class="nav-wrapper red darken-4">
      <a href="../index.html" class="brand-logo"><img src="../img/logo-write.png" alt="" style="width:450px;"/></a>
    </div>
  </nav>
  <br>
  <br>
  <br>
<div id="login" class="row">
<div class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">
    <div class="z-depth-5 card-panel  ">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <h3 class="center login-form-text">INICIAR SESIÓN</h3>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12 m12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="Error"  data-success="Correcto">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recordar Datos</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="login.html" class="btn waves-effect red darken-4 col s12">Login</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.html">Registro</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="forgot-password.html">Olvido la Contraseña?</a></p>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>

    <script>    $(".button-collapse").sideNav();</script>


  </body>

</html>
