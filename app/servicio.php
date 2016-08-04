<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="../img/favicon1.png">
    <title>CCO - REGISTRO SOLICITUD DE SERVICIO</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="../js/form.js"></script>
 </head>
  <body>
    <nav>
    <div class="nav-wrapper red darken-4">
      <a href="../index.html" class="brand-logo"><img src="../img/logo-write.png" alt="" style="width:450px;"/></a>
    	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    	<ul class="right hide-on-med-and-down">
    		<li><a href="registro.html">Nuevo Registro</a></li>
    		<li><a href="consulta.html">Consultar Registro</a></li>
    		<li><a href="collapsible.html">Salir</a></li>
      	</ul>
    	<ul class="side-nav" id="mobile-demo" >
      		<li><a href="registro.html" >Nuevo Registro</a></li>
     		  <li><a href="consulta.html" >Consultar Registro</a></li>
       		<li><a href="collapsible.html">Salir</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <center><h2>REGISTRO SOLICITUD DE SERVICIO</h2></center>
    <br>
    <br>
    <form>
    <div class="row">
    	<div class="col s12 m6">
			<div class="input-field col s12">
				<i class="material-icons prefix">person_pin</i>
				<select>
			    	<option value="" disabled selected></option>
			      	<option value="1">JURIDICO</option>
			      	<option value="2">ADMINISTRACIÓN Y FINANCIA</option>
			      	<option value="3">TALENTO HUMANO</option>
			      	<option value="4">OPERACIONES</option>
			      	<option value="5">ESCUELA DE FORMACION VIAL</option>
			      	<option value="6">MANTENIMIENTO MECANICO</option>
			      	<option value="7">PROVEEDURÍA</option>
			    </select>
			    <label>Departamentos</label>
		    </div>
			  <div class="input-field col s12">
          		<i class="material-icons prefix">account_circle</i>
          		<input id="usuario" type="text">
          		<label for="usuario">Nombre de Usuario</label>
  			</div>
    		<div class="input-field col s12">
          		<i class="material-icons prefix">perm_identity</i>
          		<input id="tecnico" type="text">
          		<label for="tecnico">Nombre del Técnico</label>
  			</div>
  			<div class="input-field col s12">
  				<i class="material-icons prefix">work</i>
    			<select multiple>
      				<option value="" disabled selected></option>
      				<option value="1">Software</option>
      				<option value="2">Hardware</option>
      				<option value="3">Red</option>
      				<option value="4">Teléfono</option>
    			</select>
    			<label>Tipo de Problema</label>
  			</div>
  		</div>

  		<div class="col s12 m6">
  			<div class="col s12">
	    		<label>Fecha</label>
		    	<div class="input-field col s12">
		        	<i class="material-icons prefix">today</i>
		        	<input id="fecha" type="date" class="datepicker">
		      </div>
	    	</div>
	    	<div class="col s12">
		        	<label>Hora de la Solicitud</label>
		    	<div class="input-field col s12">
		        	<i class="material-icons prefix">query_builder</i>
		        	<input id="hora_solicitud" type="text" class="hora" onkeypress="valida_hora(value)">
		   		</div>
	    	</div>
	    	<div class="col s12">
		        	<label>Hora del Servicio</label>
		    	<div class="input-field col s12">
		        	<i class="material-icons prefix">av_timer</i>
		        	<input id="hora_servicio" type="text" class="hora" onkeypress="valida_hora(value)">
		   		</div>
	    	</div>
  		</div>


    	<div class="col s12">
	       	<div class="input-field col s12">
	       		<i class="material-icons prefix">report_problem</i>
	        	<textarea id="problema" class="materialize-textarea"></textarea>
	        	<label for="problema">Descripción del Problema</label>
	       	</div>
	  	</div>

    	<div class="col s12">
	       	<div class="input-field col s12">
	       		<i class="material-icons prefix">verified_user</i>
	        	<textarea id="correntivas" class="materialize-textarea"></textarea>
	        	<label for="correntivas">Medidas Correntivas</label>
	       	</div>
	  	</div>

	  	<div class="col s12">

	  		<div class="col s6 offset-s4  offset-m5">
	  		<button class="btn waves-effect waves-light" type="submit" name="action">Guardar
   		 	<i class="material-icons right">send</i>
 		 	</button>
 		 	</div>
	  	</div>

   	</div>
  	</form>
  </div>

  </body>
</html>
