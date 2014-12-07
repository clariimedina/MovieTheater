<?php include("header.php"); ?>
<div id="main">
</div>

<script type="text/javascript">
$(document).ready(function(){
     var id = getParameterByName('id_pelicula');
     $.ajax({
           url: "http://localhost/cineBack/index.php/api/Peliculas?id="+id, // URL del recurso
            type: "GET",         
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                       codigo+="<div class=\"pelicula-contenedor\">";
                       codigo+="<div class=\"pelicula\">";
                       codigo+="<img src=\"images/poster/"+response.peliInfo.poster+"\">";
                       codigo+="<div class=\"pelicula-info\">";
                       codigo+="<h5>"+response.peliInfo.titulo+"</h5><hr>";
                       codigo+="<ul>";
                       codigo+="<li><strong>Titulo original:</strong>"+response.peliInfo.titulo+"</li>";
                       codigo+="<li><strong>Actores:</strong>"+response.peliInfo.actores+"</li>";
                       codigo+="<li><strong>Director:</strong>"+response.peliInfo.director+"</li>";
                       codigo+="<li><strong>Pais:</strong>"+response.peliInfo.pais+"</li>";
                       codigo+="<li><strong>Año:</strong>"+response.peliInfo.año+"</li>";
                       codigo+="<li><strong>Clasificación:</strong>"+response.peliInfo.clasificacion+"</li>";
                       codigo+="<li><strong>Duración:</strong>"+response.peliInfo.duracion+"</li>";
                       codigo+="<li><strong>Género</strong>"+response.peliInfo.genero+"</li>";
                       codigo+="</ul>";
                       codigo+="</div>";
                       codigo+="</div>";
                       codigo+="</div>";
                       codigo+="<div class=\"horarios-contenedor\">";
                       codigo+="<div id=\"horario-instruccion\">";
                       codigo+="<span>Selecciona un horario para comprar y/o reservar</span>";
                       codigo+="</div>";
                       codigo+="<div class=\"fecha-seleccion\">";
                       codigo+="<span><center>Selecciona la fecha</center></span>";
                       codigo+="<select id=\"fecha\" class=\"form-control\">";
                       codigo+="<option>Miercoles 26 de Noviembre</option>";
                       codigo+="<option>Miercoles 27 de Noviembre</option>";
                       codigo+="<option>Miercoles 28 de Noviembre</option>";
                       codigo+="</select>";
                       codigo+="</div>";
                       codigo+="<div class=\"horarios\">";
                       codigo+="<div class=\"seleccion-sala\">";
                       codigo+="<span>Digital </span><span>Español</span> <i class=\"fa fa-clock-o\"></i>";
                       codigo+="</div>";
                       codigo+="<div class=\"seleccion-hora\">";
                       codigo+="<ul id=\"lista\">";
                       codigo+="<li><a href=\"compraBoletos.php?horario=11:00&pelicula=sinsajo&numSala=1&tipoSala=digitalEspañol\" title=\"comprar boletos\">11:00 AM</a></li>";
                       codigo+="<li><a>11:45 AM</a></li>";
                       codigo+="<li><a>12:45 AM</a></li>";
                       codigo+="<li><a>1:35 AM</a></li>";
                       codigo+="<li><a>2:15 AM</a></li>";
                       codigo+="<li><a>2:15 AM</a></li>";
                       codigo+="<li><a>2:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="</ul>";
                       codigo+="</div>";
                       codigo+="<div class=\"seleccion-sala\"><span>Digital </span><SPAN>Ingles</SPAN></div>";
                       codigo+="<div class=\"seleccion-hora\">";
                       codigo+="<ul id=\"lista\">";
                       codigo+="<li><a href=\"compraBoletos.php?horario=11:00&pelicula=sinsajo&numSala=1&tipoSala=digitalEspañol\" title=\"comprar boletos\">11:00 AM</a></li>";
                       codigo+="<li><a>11:45 AM</a></li>";
                       codigo+="<li><a>12:45 AM</a></li>";
                       codigo+="<li><a>1:35 AM</a></li>";
                       codigo+="<li><a>2:15 AM</a></li>";
                       codigo+="<li><a>2:15 AM</a></li>";
                       codigo+="<li><a>2:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="<li><a>3:15 AM</a></li>";
                       codigo+="</ul>";
                       codigo+="</div>";
                       codigo+="</div>";
                       codigo+="</div>";
                       codigo+="<div class=\"info-pelicula-contenedor\">";
                       codigo+="<div class=\"info-pelicula-opciones\">";
                       codigo+="<ul>";
                       codigo+="<li id=\"trailer-link\" class=\"info-pelicula-enlaces-select\">";
                       codigo+="<a id=\"trailer\" class=\"info-pelicula-opciones-select\">";
                       codigo+="<i class=\"fa fa-play\" style=\"margin-right:10px;\"></i>Trailer";
                       codigo+="</a>";
                       codigo+="</li>";
                       codigo+="<li id=\"sipnosis-link\" class=\"info-pelicula-enlaces\">";
                       codigo+="<a id=\"sipnosis\" class=\"info-pelicula-opciones\">";
                       codigo+="<i class=\"fa fa-align-left\"></i> Sipnosis";
                       codigo+="</a>";
                       codigo+="</li>";
                       codigo+="</ul>";
                       codigo+="</div>";
                       codigo+="<div class=\"info-pelicula-contenido\">";
                       codigo+="<div class=\"info-pelicula-detalles-select\" id=\"contenido-trailer\">";
                       codigo+="<iframe width=\"700\" height=\"400\" src=\"http://www.youtube.com/embed/"+response.peliInfo.trailer+"\"></iframe>";
                       codigo+="<div class=\"info-pelicula-detalles\" id=\"contenido-sipnosis\">";
                       codigo+="<p>"+response.peliInfo.sipnosis+"</p>";
                       codigo+="</div>";
                       codigo+="</div>";
                       codigo+="</div>";
                    $('#main').html(codigo);
               }
            }   
     }); 
});

</script>
<?php include('footer.php');?>