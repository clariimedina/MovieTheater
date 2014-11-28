-<?php include("header.php"); ?>
<div id="main">
	<div class="cartelera-contenedor">

		<div class="cartelera">
			<div class="cartelera-info">
				<div class="cartelera-icono">
					<i class="fa fa-map-marker"></i>
				</div>
				<h4 id="titulo"></h4>	
			</div>
			<div class="cartelera-peliculas">
				<ul>
					<li><a id="1" href="pelicula.php"><img src="images/poster/poster1.jpg"></a><br><center>Los juegos del hambre</center></li>
					<li><a id="2" href=""><img src="images/poster/poster2.jpg"></a><br><center>Annabelle</center></li>
					<li><a id="3" href=""><img src="images/poster/poster3.png"></a><br><center>Interestelar</center></li>
					<li><a id="4" href=""><img src="images/poster/poster4.jpg"></a><br><center>Una pareja mas tonta</center></li>
					<li><a id="5" href=""><img src="images/poster/poster5.jpg"></a><br><center>La dictadura perfecta</center></li>
				</ul> 
			</div>
		</div>

		<div class="cartelera">
			<div class="cartelera-info">
				<div class="cartelera-icono">
					<i class="fa fa-map-marker"></i>
				</div>
				<h4>Movie Theater Plaza Culiacan</h4>	
			</div>
			<div class="cartelera-peliculas">
				<ul>
					<li><a href=""><img src="images/poster/poster1.jpg"></a><br><center>Los juegos del hambre</center></li>
					<li><a href=""><img src="images/poster/poster2.jpg"></a><br><center>Annabelle</center></li>
					<li><a href=""><img src="images/poster/poster3.png"></a><br><center>Interestelar</center></li>
					<li><a href=""><img src="images/poster/poster4.jpg"></a><br><center>Una pareja mas tonta</center></li>
					<li><a href=""><img src="images/poster/poster5.jpg"></a><br><center>La dictadura perfecta</center></li>
				</ul> 
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		var ciudad = getParameterByName('ciudad');
		$('#titulo').html("Movie Theater Forum " + ciudad);
	});
</script>
<?php include("footer.php"); ?>