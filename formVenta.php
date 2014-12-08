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
        <div id="form-venta-container" id="contenido">
            
            <div id="form-container">
                <h2>Proporcione La información</h2>
                <div class="row">
                    <div class="col-lg-2"><input id="name" placeholder="Nombre"></div>
                    <div class="col-lg-2 col-lg-offset-1"><input id="paternal-name" placeholder="Apellido Paterno"></div>
                    <div class="col-lg-2 col-lg-offset-1"><input  id="maternal-name" placeholder="Apellido Materno"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2"><input id="email" placeholder="email"></div>
                    <div class="col-lg-2 col-lg-offset-1"><input  id="number-card" placeholder="Tarjeta"></div>
                    <div class="col-lg-2 col-lg-offset-1">
                        <input type="radio" name="tipoTarjeta" value="cine" placeholder="Nombre" checked>Tarjeta cliente</div>
                    <div class="col-lg-2 col-lg-offset-1">
                        <input type="radio" name="tipoTarjeta" value="banco" placeholder="Nombre">Tarjeta de banco</div>
                </div>
            </div> <!--End form-container-->
            
            <button type="button" id="btnSiguienteForm">Siguiente</button>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>

<script type="text/javascript">

    $("#btnSiguienteForm").click(function(){
        var nombre = $("#name").val();
        var apellidoPaterno = $("#paternal-name").val();
        var apellidoMaterno = $("#maternal-name").val();
        var email = $("#email").val();
        var numTarjeta = $("#number-card").val();
        var tipoTarjeta = $('input:radio[name=tipoTarjeta]:checked').val();
        console.log(nombre);
        console.log(apellidoPaterno);
        console.log(apellidoMaterno);
        console.log(email);
        console.log(numTarjeta);
        console.log(tipoTarjeta);
    });

</script>

