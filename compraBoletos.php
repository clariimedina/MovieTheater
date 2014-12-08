<?php include("header.php"); ?>
	<div id="main">
		<div class="compra-detalle">
			<div class="compra-detalle-lbl">
				<span>Detalle compra</span>
			</div>
			<div class="compra-detalle-img">
				<img src="images/poster/poster1.jpg">
			</div>
			<div class="compra-detalle-info">
				<ul>
					<li><strong>Titutlo: </strong>Los Juegos del hambre: Sinsajo</li>
					<li><strong>Clasificación: </strong>B</li>
					<li><strong>Versión: </strong>Digital,Español</li>
					<li><strong>Día: </strong>Sabado de Noviembre</li>
					<li><strong>Horario: </strong>11:00</li>
					<li><strong>Cine: </strong>Cinemex Forum Culiacan</li>
					<li><strong>Sala: </strong>5</li>
				</ul>
			</div>
		</div>
		<div class="compra-proceso" style="display:inline-block">
			<div class="compra-proceso-instrucciones">
				<ul>
					<li><strong>1</strong><span>Seleccionar boletos</span></li>
					<li><strong>2</strong><span> Seleccion de asientos</span></li>
					<li><strong>3</strong><span>Detalles de pago</span></li>
				</ul>
			</div>
			<div class="compra-proceso-seleccionBoletos" id="contenido">
				<span><h4>1. Seleccion Boletos</h4></span>
				<div class="compra-proceso-infoBoletos">
					<span>Seleccione el numero de boletos</span>
				</div>
				<div class="compra-proceso-numBoletos">
					<input type="number" value="1" max="50" min="1" onkeypress="return justNumbers(event)" placeholder="1" id="numBoletos" >
					<output name=“cociente” for="dividendo divisor">
				</div>
				<div class="compra-proceso-tipoProceso">
					<input type="radio" name="tipoVenta" value="Compra" checked>Compra
					<input type="radio" name="tipoVenta" value="Reserva">Reserva
					<button type="button" id="btnSiguiente">Siguiente</button>
				</div>
			</div>
		</div>
	</div>
<?php include("footer.php"); ?>

<script type="text/javascript">


$(document).ready(function(){
	var horario = getParameterByName('horario');
	var pelicula = getParameterByName('pelicula');
	var numSala = getParameterByName ("numSala");
	var tipoSala = getParameterByName('tipoSala');
	$("#btnSiguiente").click(function(){
			var numBoletos = $("#numBoletos").val();
			var tipoVenta = $('input:radio[name=tipoVenta]:checked').val();
			 $('#contenido').html(""); 
             $("#contenido").css("display","none");
          	$.ajax({
				url:"http://localhost/cineBack/index.php/api/IniciaNuevaVenta?numBoletos="+numBoletos+"&horario="+horario+"&pelicula="+pelicula+"&numSala="+numSala+"&tipoSala="+tipoSala+"&tipoVenta="+tipoVenta,
				type:"POST",
				dataType: "JSON",
				success: function(response) {
						
					
				}
			});
	});
});

</script>
