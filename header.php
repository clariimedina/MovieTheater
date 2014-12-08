<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">
		<title>Movie Theater</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/flat-ui.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
   		<link href="fancyBox/source/jquery.fancybox.css" type="text/css" rel="stylesheet">
   		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="images/Logo/4.png" rel="shortcut icon" >

		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="fancyBox/source/jquery.fancybox.pack.js" ></script>
		<script type="text/javascript" src="js/funcionFancyBox.js"></script>
		<script type="text/javascript" src="js/validaNumeros.js"></script>
		
	</head>
	<body>
		<header>
			<nav class="header-properties">
				<div id="menu">
					<ul>
						<li><img src="images/Header/iconoMovie3.png"></li>
						<li>
							<select id="ciudad" class="form-control">
								<option >Selecciona tu ciudad</option>
								<option value="Culiacán">Culiacán</option>
								<option value="Navolato">Navolato</option>
								<option value="Mochis">Los Mochis</option>
								<option value="DF">DF</option>
							</select>
						</li>
						<li>
							<button id="header-button-cartelera">
								<strong id="header-button-cartelera-letras">Ver la cartelera</strong>
							</button>
						</li>
						<li id="header-li-user">
							<button type="button" data-toggle="modal" data-target="#modalInicio">
								<span class="header-properties-button-user ">
									<i class="fa fa-user"></i>
								</span>
								<strong class="header-properties-user-strong">Paga reservación</strong>
							</button>
						</li>
					</ul>
				</div>	
			</nav>
			<div class="menu-properties">
				<ul>
					<li><a href="index.php"> Inicio</a></li>
					<li><a href="cines.php">Cines</a></li>
					<li><a href="premium.php">Premium</a></li>
					<li><a href="4d.php">X4D</a></li>
					<li><a href="3d.php">3D</a></li>
					<li><a href="moviextremo.php">MovieXtremo</a></li>
					<li><a href="invitadoespecial.php">Invitado Especial</a></li>
					<li><a href="buzon.php">Buzón Theater</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
				</ul>
			</div>
		</header>

		<!-- MODAL -->
		<section>
			<div class="modal fade" id="modalInicio">
				<div class="modal-dialog">
					<div class="modal-content modal-properties">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						    <h7 class="modal-title"><span class="modal-properties-letter">Ingrese su clave de reserva</span></h7>
						</div>
						<div class="modal-body modal-body-properties">
							<form class="modal-form">
						        <div><input type="text" name="emailUser"></div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary btn-reserve" data-dismiss="modal">Aceptar</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</section>

		<script type="text/javascript">
			function getParameterByName(name) {
			    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			        results = regex.exec(location.search);
			    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			}

			$(document).ready(function() {
				$('#header-button-cartelera').click(function() {
					var ciudad = $('#ciudad option:selected').attr('value');
					window.location.href = "http://localhost/MovieTheater/cartelera.php?ciudad="+ciudad;
				});
			});
		</script>