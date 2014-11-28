<?php include("header.php"); ?>
<div id="main">
	<div class="pelicula-contenedor">
		<div class="pelicula">
			<img src="images/poster/poster1.jpg">
			<div class="pelicula-info">
				<h5>Los juegos de hambre: Sinsajo Parte 1</h5> <hr>
				<ul>
					<li><strong>Titulo original:</strong> The Hunger Games. Mockingjay - Part 1</li>
					<li><strong>Actores:</strong>Jennifer Lawrence, Josh Hutcherson, Julianne Moore y Philip Seymour Hoffman</li>
					<li><strong>Director:</strong>Francis Lawrence</li>
					<li><strong>Pais:</strong>Estados Unidos</li>
					<li><strong>Año:</strong>2014</li>
					<li><strong>Clasificación:</strong>B</li>
					<li><strong>Duración:</strong>125 minutos</li>
					<li><strong>Género</strong>Ciencia Ficción</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="horarios-contenedor">
		<div id="horario-instruccion">
			<span>Selecciona un horario para comprar y/o reservar</span>
		</div>
		<div class="fecha-seleccion">
			<span><center>Selecciona la fecha</center></span>
			<select id="fecha" class="form-control">
				<option>Miercoles 26 de Noviembre</option>
				<option>Miercoles 27 de Noviembre</option>
				<option>Miercoles 28 de Noviembre</option>
			</select>
		</div>
		<div class="horarios">
			<div class="seleccion-sala">
				<span>Digital </span><SPAN>Español</SPAN> <i class="fa fa-clock-o"></i>
			</div>
			<div class="seleccion-hora">
				<ul id="lista"> 
					<li><a href="" title="comprar boletos">11:00 AM</a></li>
					<li><a href="" >11:45 AM</a></li>
					<li><a href="">12:45 PM</a></li>
					<li><a href="">1:35 PM</a></li>
					<li><a href="">2:15 PM</a></li>
					<li><a href="">3:20 PM</a></li>
					<li><a href="">4:10 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
				</ul>
			</div>
			<div class="seleccion-sala"><span>Digital </span><SPAN>Ingles</SPAN></div>
			<div class="seleccion-hora">
				<ul >
					<li><a href="">11:00 AM</a></li>
					<li><a href="">11:45 AM</a></li>
					<li><a href="">12:45 PM</a></li>
					<li><a href="">1:35 PM</a></li>
					<li><a href="">2:15 PM</a></li>
					<li><a href="">3:20 PM</a></li>
					<li><a href="">4:10 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
					<li><a href="">4:45 PM</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$('#lista li').tooltip();
</script>