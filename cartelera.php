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
            url: "http://localhost:8080/cineBack/index.php/api/Ciudad?ciudad="+c, // URL del recurso
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
						codigo+="<h4>"+complejos.nombre+" "+complejos.complejo+"</h4>";
						codigo+="</div>";
						codigo+="<div class=\"cartelera-peliculas\">";
						codigo+="<ul>";
						codigo+="<li><a id=\"1\" href=\"pelicula.php\"><img src=\"images/poster/poster1.jpg\"></a><br><center>Los juegos del hambre</center></li>";
						codigo+="<li><a id=\"2\"><img src=\"images/poster/poster2.jpg\"></a><br><center>Annabelle</center></li>";
						codigo+="<li><a id=\"3\"><img src=\"images/poster/poster3.png\"></a><br><center>Interestelar</center></li>";
						codigo+="<li><a id=\"4\"><img src=\"images/poster/poster4.jpg\"></a><br><center>Una pareja mas tonta</center></li>";
						codigo+="<li><a id=\"5\"><img src=\"images/poster/poster5.jpg\"></a><br><center>La dictadura perfecta</center></li>";
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