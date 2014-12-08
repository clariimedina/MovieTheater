<?php include("header.php"); ?>
<div id="main">
	<div class="cartelera-contenedor">
		<div class="cartelera" id="contenido">
		</div>
	</div>
</div>

 <script type="text/javascript">
$(document).ready(function(response) {
	var c = getParameterByName('ciudad');
    $.ajax({
            url: "http://localhost:/cineBack/index.php/api/Ciudad?ciudad="+c, // URL del recurso
            type: "GET",         
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.complejos, function(index,complejos) { // function(Index,ganado)
                    	  codigo+="<div class=\"cartelera-info\">";
            						codigo+="<div class=\"cartelera-icono\">";
            						codigo+="<i class=\"fa fa-map-marker\"></i>";
            						codigo+="</div>";
            						codigo+="<h4>"+complejos.nombre+"</h4>";
            						codigo+="</div>";
            						codigo+="<div class=\"cartelera-peliculas\">";
            						codigo+="<ul id=\"PeliculasporComplejo\">";
                    		$.each(complejos.salaComplejos, function(index,salaComplejos) { // function(Index,ganado)
                            var numSala = salaComplejos.numSala;
                            var id_sala = salaComplejos.id_sala;
                              codigo+="<li><a id="+salaComplejos.peliculas.id_pelicula+" href=\"peliculaInfo.php?id_pelicula="+salaComplejos.peliculas.id_pelicula+"&numSala="+numSala+"&id_sala="+id_sala+"\"><img src=\"images/poster/"+salaComplejos.peliculas.poster+"\"></a><br><center>"+salaComplejos.peliculas.titulo+"</center></li>";  
                  			});
                    			$('#PeliculasporComplejo').html(codigo); 
                					codigo+="</ul>"; 
                					codigo+="</div>";                    	
                   });
                $('#contenido').html(codigo);
                }
            }   

    });
});

</script>

<?php include("footer.php"); ?>