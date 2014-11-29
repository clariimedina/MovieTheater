
$(document).ready(function(){
	$("#trailer").click(function(){
		$("#contenido-trailer").addClass("info-pelicula-detalles-select");
		$("#contenido-sipnosis").addClass("info-pelicula-detalles");
		$("#contenido-sipnosis").removeClass("info-pelicula-detalles-select");
		$("#contenido-trailer").removeClass("info-pelicula-detalles");

		$("#trailer").addClass("info-pelicula-opciones-select");
		$("#sipnosis").addClass("info-pelicula-opciones");
		$("#sipnosis").removeClass("info-pelicula-opciones-select");
		$("#trailer").removeClass("info-pelicula-opciones");

		$("#trailer-link").addClass("info-pelicula-enlaces-select");
		$("#sipnosis-link").addClass("info-pelicula-enlaces");
		$("#sipnosis-link").removeClass("info-pelicula-enlaces-select");
		$("#trailer-link").removeClass("info-pelicula-enlaces");
	});
	$("#sipnosis").click(function(){
		$("#contenido-sipnosis").addClass("info-pelicula-detalles-select");
		$("#contenido-trailer").addClass("info-pelicula-detalles");
		$("#contenido-trailer").removeClass("info-pelicula-detalles-select");
		$("#contenido-sipnosis").removeClass("info-pelicula-detalles");

		$("#sipnosis").addClass("info-pelicula-opciones-select");
		$("#trailer").addClass("info-pelicula-opciones");
		$("#trailer").removeClass("info-pelicula-opciones-select");
		$("#sipnosis").removeClass("info-pelicula-opciones");

		$("#sipnosis-link").addClass("info-pelicula-enlaces-select");
		$("#trailer-link").addClass("info-pelicula-enlaces");
		$("#trailer-link").removeClass("info-pelicula-enlaces-select");
		$("#sipnosis-link").removeClass("info-pelicula-enlaces");
	});
});