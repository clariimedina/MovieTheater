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
	<div class="compra-proceso">
		<div class="compra-proceso-instrucciones">
			<ul>
				<li><strong>1</strong><span>Seleccionar boletos</span></li>
				<li><strong>2</strong><span> Seleccion de asientos</span></li>
				<li><strong>3</strong><span>Detalles de pago</span></li>
				<li><strong>4</strong><span>Boletos</span></li>
			</ul>
		</div>
		<div class="compra-proceso-seleccionBoletos" id="contenido">
			<span><h4>1. Seleccion Boletos</h4></span>
			<div class="compra-proceso-infoBoletos">
				<span>Seleccione el numero de boletos</span>
			</div>
			<div class="compra-proceso-numBoletos">
				<input type="number" value="1" max="50" min="1" placeholder="1" id="numBoletos">
				<output name="cociente" for="dividendo divisor">
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
var contBoletos = 0;
var boletosCompletos = false;
var arrayId = [];

$(document).ready(function(){
	var horario = getParameterByName('horario');
	var pelicula = getParameterByName('pelicula');
	var numSala = getParameterByName ("numSala");
	var tipoSala = getParameterByName('tipoSala');
	//console.log("numSala "+numSala);
	//console.log("tipoSala "+tipoSala);
	
	$("#btnSiguiente").click(function(){
		contBoletos= 0;
		console.log('boletos en ajax '+contBoletos);
		var numBoletos = $("#numBoletos").val();
		var tipoVenta = $('input:radio[name=tipoVenta]:checked').val();
		$('#contenido').html(""); 
        //$("#contenido").css("display","none");
      	$.ajax({
			url:"http://localhost:8080/cineBack/index.php/api/IniciaNuevaVenta?numBoletos="+numBoletos+"&horario="+horario+"&pelicula="+pelicula+"&numSala="+numSala+"&tipoSala="+tipoSala+"&tipoVenta="+tipoVenta,
			type:"GET",
			dataType: "JSON",
			success: function(response) {
				var codigo='';
				var cont= 0;
				var c=0;
				var five= 0;
				var currentId;
				if (response.success == true) {
					codigo = "<div id=\"seating-container\">";
                	$.each(response.venta.complejos, function(index, asiento) {
                		currentId = response.venta.complejos[c].id_asiento;
                		/*console.log(currentId); */
                		cont++;
                		if(cont == 11 || five == 1) {
                			codigo+="<div class=\"empty-seating-item\">";
                			codigo+="<i class=\"fa fa-user fa-5x icon\">";
                			codigo+="</i></div>";
                			if (response.venta.complejos[c] = "1")
                				codigo+="<div class=\"seating-item available\">";
                			else
                				codigo+="<div class=\"sold\">";
							codigo+="<i id=\""+currentId+"\" class=\"fa fa-user fa-5x icon\" onclick=\"seatsHandler("+currentId+","+numBoletos+")\">";
							codigo+="</i></i></div>";
                			cont=1;
                			five=-1;
                		}
                		else {
                			if (response.venta.complejos[c] = "1")
                				codigo+="<div class=\"seating-item available\">";
                			else
                				codigo+="<div class=\"sold\">";
							codigo+="<i  id=\""+currentId+"\" class=\"fa fa-user fa-5x icon\" onclick=\"seatsHandler("+currentId+","+numBoletos+")\">";
							codigo+="</i></i></div>";
						}
						if(cont==5 && five!=-1) {five = 1}
						c++;
					});
					codigo+="</div>";
					codigo+="<div id=\"button-sig-container\">";
					codigo+="<button type=\"button\" id=\"btnSiguienteAsientos\" onclick=\"NextStep()\">Siguiente</button>";
					codigo+="</div>"
                $('#contenido').html(codigo);
            	}
			}
		});
	});
});

function seatsHandler(currentId, numBoletos) {
	//console.log("contador de boletos nan "+contBoletos);
	contBoletos = putColor(currentId,contBoletos);
	if (contBoletos == numBoletos) {
		boletosCompletos = true;
		//console.log('contBoletos '+contBoletos+" numBoletos "+numBoletos+" boletosCompletos "+boletosCompletos);
		//console.log('arreglo de id '+arrayId);
	}
}

function putColor(currentId, contBoletos) {
	var className = $("#"+currentId).parent().attr('class');
	if(className.match("available") && boletosCompletos!=true) {
		//console.log("putColor DISPONIBLE");
		$("#"+currentId).parent().removeClass('available');
		$("#"+currentId).parent().addClass('selected');
		contBoletos++;
		arrayId.push(currentId);
		//console.log("CONT BOLETOS "+contBoletos);
		//console.log("BOLETOS COMPLETOS"+boletosCompletos);
	}
	if(className.match("selected")) {
		//console.log("putColor selected");
		$("#"+currentId).parent().removeClass('selected');
		$("#"+currentId).parent().addClass('available');
		boletosCompletos = false;
		contBoletos--;
		var index = arrayId.indexOf(currentId);
		arrayId.splice(index,1);
		//console.log("CONT BOLETOS "+contBoletos);
		//console.log("BOLETOS COMPLETOS"+boletosCompletos);
	}
	return contBoletos;
}

function NextStep() {
	console.log('Siguiente');
	if(boletosCompletos){
		window.location.href = "http://localhost:8080/MovieTheater/formVenta.php";
	}
}

</script>


