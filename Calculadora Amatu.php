<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculadoraDeAlimento</title>

	<style type="text/css">
		#si_salud_normal, #no_salud_normal, #datos_enviados, #formulario_perro, #formulario_gato{
			display: none;
		}
	</style>

</head>
<body>
	<h4>CALCULA SU RACIÓN DIARIA DE AMATU</h4>
	<div class="">
	<h5>Mascota:</h5>
	<div class="">
	<button type="button" onclick="mostrarformulario_perro();">Perro</button>
    <button type="button" onclick="mostrarformulario_gato();">Gato</button> 
	</div>
	</div>

	<div id="formulario_perro">
	<h5>¿Tiene una salud normal? </h5>

<button type="button" onclick="mostrarSi();">Si</button>
<button type="button" onclick="mostrarNo();">No</button> 

<div id="si_salud_normal">
<h5>Nombre:</h5>
<input type="text" id="nombre" required minlength="4" maxlength="15" size="15"><br>
<h5>Peso(Ideal): </h5>
<input type="number" id="peso" required minlength="4" maxlength="4" size="15"><br><br>				
</div>

<div id="no_salud_normal">
<h4>Mi extraperrestre tiene problemas de: </h4>
<div class="">
	<input id="problemas_mascota_higado" name="problemas" required="" type="radio" value="0"/>
	<label class="ms-2">Hígado</label><br>
	<input id="problemas_mascota_pancreas" name="problemas" required="" type="radio" value="1"/>
	<label class="ms-2">Páncreas</label><br>
	<input id="problemas_mascota_riñones" name="problemas" required="" type="radio" value="2"/>
	<label class="ms-2">Riñones</label><br>
	<input id="problemas_mascota_tiroides" name="problemas" required="" type="radio" value="3"/>
	<label class="ms-2">Tiroides</label><br>
	<input id="problemas_mascota_otra" name="problemas" required="" type="radio" value="4"/>
	<label class="ms-2">Otra: <input type="text" id="problemas_mascota_otra" required minlength="4" maxlength="20" size="15"></label>
	<h4>Por favor llena los siguientes datos para ponernos en contacto contigo y tu veterinario de confianza, con el fin de diseñar una dieta especial para la condición de tu perro.</h4>
	<label class="ms-2">Nombre Completo: <input type="text" id="nombre_completo" required minlength="20" maxlength="40" size="15"></label>
	<label class="ms-2">Correo: <input type="email" id="correo_electronico" required minlength="20" maxlength="40" size="15"></label>
	<label class="ms-2">Telefono: <input type="number" id="telefono_personal" required minlength="20" maxlength="40" size="15"></label>
	<button type="button" onclick="mostrarGracias();">Enviar</button>
	<div id="datos_enviados">
	<h4>Gracias, ¡nos pondremos en contacto contigo pronto!</h4>
	</div>
	<h4>(Nota) Amatu no tiene alimentos medicados pero contamos con recetas magistrales, balanceadas de manera especial, que favorecen algunos tratamientos médico-veterinarios</h4>
</div>
</div>

<div id="Tamaño_canino">
<label for="">Tamaño adulto*</label><br>
<select name="Tamaño" id="">
<option value="Miniatura">Miniatura: de 1kg a 5kg</option>
<option value="Pequeño">Pequeño: de 6kg a 9kg</option>
<option value="Mediano">Mediano: de 10kg a 19kg</option>
<option value="Grande">Grande: de 23kg a 45kg</option>
<option value="Gigante">Gigante: >46kg</option>
</select><br><br>

<label for="">Raza*</label><br>
<select name="Raza" id="">
<option value="Pinsher">Pinsher miniatura: 4.5kg</option>
<option value="PitbullA">Pitbull Americano: 22 a 39kg</option>
<option value="PitbullT">Pitbull Terrir: 15 a 27kg</option>
<option value="PitbullS">Pitbull Staffordshier: 11 a 17kg</option>
<option value="Podenco">podenco Andaluz</option>
<option value="Criollo">Criollo</option>
<option value="Noc">No tengo idea</option>
</select><br><br>
</div>
</div>

<div id="formulario_gato">
	<h5>¿Tiene una salud normal? </h5>

<button type="button" onclick="mostrarSi_gato();">Si</button>
<button type="button" onclick="mostrarNo_gato();">No</button> 

<div id="si_salud_normal_gato">
<h5>Nombre:</h5>
<input type="text" id="nombre" required minlength="4" maxlength="15" size="15"><br>
<h5>Peso(Ideal): </h5>
<input type="number" id="peso" required minlength="4" maxlength="4" size="15"><br><br>				
</div>

<div id="no_salud_normal_gato">
<h4>Mi extraperrestre gatuno tiene problemas de: </h4>
<div class="">
	<input id="problemas_mascota_higado_gato" name="problemas" required="" type="radio" value="0"/>
	<label class="ms-2">Hígado</label><br>
	<input id="problemas_mascota_pancreas_gato" name="problemas" required="" type="radio" value="1"/>
	<label class="ms-2">Páncreas</label><br>
	<input id="problemas_mascota_riñones_gato" name="problemas" required="" type="radio" value="2"/>
	<label class="ms-2">Riñones</label><br>
	<input id="problemas_mascota_tiroides_gato" name="problemas" required="" type="radio" value="3"/>
	<label class="ms-2">Tiroides</label><br>
	<input id="problemas_mascota_otra_gato" name="problemas" required="" type="radio" value="4"/>
	<label class="ms-2">Otra: <input type="text" id="problemas_mascota_otra" required minlength="4" maxlength="20" size="15"></label>
	<h4>Por favor llena los siguientes datos para ponernos en contacto contigo y tu veterinario de confianza, con el fin de diseñar una dieta especial para la condición de tu perro.</h4>
	<label class="ms-2">Nombre Completo: <input type="text" id="nombre_completo" required minlength="20" maxlength="40" size="15"></label>
	<label class="ms-2">Correo: <input type="email" id="correo_electronico" required minlength="20" maxlength="40" size="15"></label>
	<label class="ms-2">Telefono: <input type="number" id="telefono_personal" required minlength="20" maxlength="40" size="15"></label>
	<button type="button" onclick="mostrarGracias();">Enviar</button>
	<div id="datos_enviados">
	<h4>Gracias, ¡nos pondremos en contacto contigo pronto!</h4>
	</div>
	<h4>(Nota) Amatu no tiene alimentos medicados pero contamos con recetas magistrales, balanceadas de manera especial, que favorecen algunos tratamientos médico-veterinarios</h4>
</div>
</div>

<div id="Tamaño_gatuno">
<label for="">Tamaño adulto*</label><br>
<select name="Tamaño" id="">
<option value="Miniatura">Miniatura: de 1kg a 5kg</option>
<option value="Pequeño">Pequeño: de 6kg a 9kg</option>
<option value="Mediano">Mediano: de 10kg a 19kg</option>
<option value="Grande">Grande: de 23kg a 45kg</option>
<option value="Gigante">Gigante: >46kg</option>
</select><br><br>

<label for="">Raza*</label><br>
<select name="Raza" id="">
<option value="Pinsher">Pinsher miniatura: 4.5kg</option>
<option value="PitbullA">Pitbull Americano: 22 a 39kg</option>
<option value="PitbullT">Pitbull Terrir: 15 a 27kg</option>
<option value="PitbullS">Pitbull Staffordshier: 11 a 17kg</option>
<option value="Podenco">podenco Andaluz</option>
<option value="Criollo">Criollo</option>
<option value="Noc">No tengo idea</option>
</select><br><br>
</div>
</div>
	

	<script type="text/javascript">
		function mostrarformulario_perro() {
			document.getElementById('formulario_perro').style.display = 'block';
			document.getElementById('formulario_gato').style.display = 'none';
			document.getElementById('no_salud_normal').style.display = 'none';
			document.getElementById('si_salud_normal').style.display = 'none';
		}
		function mostrarformulario_gato() {
			document.getElementById('formulario_gato').style.display = 'block';
			document.getElementById('formulario_perro').style.display = 'none';
			document.getElementById('no_salud_normal_gato').style.display = 'none';
			document.getElementById('si_salud_normal_gato').style.display = 'none';
		}
		function mostrarSi() {
			document.getElementById('si_salud_normal').style.display = 'block';
			document.getElementById('no_salud_normal').style.display = 'none';
		}

		function mostrarNo() {
			document.getElementById('si_salud_normal').style.display = 'none';
			document.getElementById('no_salud_normal').style.display = 'block';
		}
		function mostrarGracias() {
			document.getElementById('si_salud_normal').style.display = 'none';
			document.getElementById('no_salud_normal').style.display = 'block';
			document.getElementById('datos_enviados').style.display = 'block';
		}
		function mostrarSi_gato() {
			document.getElementById('si_salud_normal_gato').style.display = 'block';
			document.getElementById('no_salud_normal_gato').style.display = 'none';
		}

		function mostrarNo_gato() {
			document.getElementById('si_salud_normal_gato').style.display = 'none';
			document.getElementById('no_salud_normal_gato').style.display = 'block';
		}

	</script>
</body>
</html>