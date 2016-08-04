<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="img/favicon1.png">
    <title>CCO - TECNOLOGIA</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
 </head>
  <body>
    <nav>
    <div class="nav-wrapper red darken-4">
      <a href="index.html" class="brand-logo"><img src="img/logo-write.png" alt="" style="width:450px;"/></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="login.html">Iniciar Sesión</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo" >
        <li><a href="login.html" >Iniciar Sesión</a></li>
        <li><a href="badges.html" >Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html" >Mobile</a></li>
      </ul>
    </div>
  </nav>


       <script>    $(".button-collapse").sideNav();</script>
  </body>
</html>
