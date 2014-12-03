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
					<li><a href="compraBoletos.php?horario=11:00&pelicula=sinsajo&numSala=5&tipoSala=digitalEspañol" title="comprar boletos">11:00 AM</a></li>
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
	<div class="info-pelicula-contenedor">
		<div class="info-pelicula-opciones">
			<ul>
				<li id="trailer-link" class="info-pelicula-enlaces-select"><a id="trailer" class="info-pelicula-opciones-select"><i class="fa fa-play" style="margin-right:10px;"></i>Trailer</a></li>
				<li id="sipnosis-link" class="info-pelicula-enlaces"><a id="sipnosis" class="info-pelicula-opciones"><i class="fa fa-align-left"></i> Sipnosis</a></li>
			</ul>
		</div>
		<div class="info-pelicula-contenido">
			<div class="info-pelicula-detalles-select" id="contenido-trailer">						
				<iframe width="700" height="400" src="http://www.youtube.com/embed/ryd-GcG6Hkk"></iframe>
			</div>
			<div class="info-pelicula-detalles" id="contenido-sipnosis">
				<p>Los juegos del hambre: Sinsajo Parte 1 en la que Katniss Everdeen se encuentra en el Distrito 13 después de destrozar literalmente los Juegos para siempre. Bajo el liderazgo de la Presidente Coin y el consejo de sus amigos más leales, Katniss extiende sus alas mientras lucha por salvar a Peeta Mellark y a una nación alentada por su valentía.</p>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
