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
            url: "http://localhost/cineBack/index.php/api/Ciudad?ciudad="+c, // URL del recurso
            type: "GET",         
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.complejos, function(index, complejos) { // function(Index,ganado)

                    	codigo+="<div class=\"cartelera-info\">";
						codigo+="<div class=\"cartelera-icono\">";
						codigo+="<i class=\"fa fa-map-marker\"></i>";
						codigo+="</div>";
						codigo+="<h4>"+complejos.nombre+"</h4>";
						codigo+="</div>";
						codigo+="<div class=\"cartelera-peliculas\">";
						codigo+="<ul id=\"PeliculasporComplejo\">";
                    		$.each(complejos.peliculas, function(index,peliculas) { // function(Index,ganado)

								codigo+="<li><a id="+peliculas.id_pelicula+" href=\"peliculaInfo.php?id_pelicula="+peliculas.id_pelicula+"\"><img src=\"images/poster/"+peliculas.poster+"\"></a><br><center>"+peliculas.titulo+"</center></li>";
                		
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