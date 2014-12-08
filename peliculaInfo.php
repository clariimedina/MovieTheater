<?php include("header.php"); ?>
<div id="main">
</div>

<script type="text/javascript">
$(document).ready(function(){
     var id_pelicula = getParameterByName('id_pelicula');
     var numSala = getParameterByName('numSala');
     var id_sala = getParameterByName('id_sala');

     $.ajax({
           url: "http://localhost/cineBack/index.php/api/Peliculas?id_pelicula="+id_sala+"&numSala="+numSala+"&id_sala="+id_sala, // URL del recurso
            type: "GET",         
            dataType: "json",
            success: function(response) {
                var fecha_select = $('#fecha option:selected').attr('value');
                var codigo='';  
                if (response.success == true) {
                    $.each(response.peliInfo, function(index,peliInfo) {
                       codigo+="<div class=\"pelicula-contenedor\">";
                       codigo+="<div class=\"pelicula\">";
                       codigo+="<img src=\"images/poster/"+peliInfo.peliculas.poster+"\">";
                       codigo+="<div class=\"pelicula-info\">";
                       codigo+="<h5>"+peliInfo.peliculas.titulo+"</h5><hr>";
                       codigo+="<ul>";
                       codigo+="<li><strong>Titulo original:</strong>"+peliInfo.peliculas.titulo+"</li>";
                       codigo+="<li><strong>Actores:</strong>"+peliInfo.peliculas.actores+"</li>";
                       codigo+="<li><strong>Director:</strong>"+peliInfo.peliculas.director+"</li>";
                       codigo+="<li><strong>Pais:</strong>"+peliInfo.peliculas.pais+"</li>";
                       codigo+="<li><strong>Año:</strong>"+peliInfo.peliculas.año+"</li>";
                       codigo+="<li><strong>Clasificación:</strong>"+peliInfo.peliculas.clasificacion+"</li>";
                       codigo+="<li><strong>Duración:</strong>"+peliInfo.peliculas.duracion+"</li>";
                       codigo+="<li><strong>Género</strong>"+peliInfo.peliculas.genero+"</li>";
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
                       $.each (peliInfo.fechas, function(index,fechas){
                          codigo+="<option value=\""+fechas.id_fecha+"\">"+fechas.fecha+"</option>";               
                        });
                       codigo+="</select>";
                       codigo+="</div>";
                       codigo+="<div class=\"horarios\">";
                       codigo+="<div class=\"seleccion-sala\">";
                       codigo+="<span>"+peliInfo.tipoSala+" </span><i class=\"fa fa-clock-o\"></i>";
                       codigo+="</div>";
                       codigo+="<div class=\"seleccion-hora\">";
                       codigo+="<ul id=\"lista\">";
                        $.each(peliInfo.fechas,function(index,fechas){
                          $.each(fechas.horarios, function(index,horarios){
                               codigo+="<li><a href=\"compraBoletos.php?horario="+horarios.horario+"&pelicula="+peliInfo.peliculas.titulo+"&numSala="+peliInfo.numSala+"&tipoSala="+peliInfo.tipoSala+"\" title=\"comprar boletos\">"+horarios.horario+"</a></li>";
                          });
                        });
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
                       codigo+="<iframe width=\"700\" height=\"400\" src=\"http://www.youtube.com/embed/"+peliInfo.peliculas.trailer+"\"></iframe>";
                       codigo+="<div class=\"info-pelicula-detalles\" id=\"contenido-sipnosis\">";
                       codigo+="<p>"+peliInfo.peliculas.sipnosis+"</p>";
                       codigo+="</div>";
                       codigo+="</div>";
                       codigo+="</div>";
                      });
                    $('#main').html(codigo);
               }
            }   
     }); 
});

</script>
<?php include('footer.php');?>