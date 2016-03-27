//Rutas de galerías de Imágenes
var General = "";//1
var Playas = "";//2
var Monumentos = "";//3
var Flora = "";//4
var Fauna = "";//5

var directorioImagenes = ""
var imagenActual = "";
var longitudArrayImagenes = "";

function debugRutas(x) {
	alert("La longitud del Array es: " + longitudArrayImagenes + "\n"
				+ "La Imagen Actual es la: " + x + "\n"
				+ "El directorio actual de las imágenes es: " + General + "\n"
				+ "El nombre completo de la imagen sería: " + directorioImagenes + imagenActual + ".jpg");
}

function cambiarBackground(x, y) {
	var imagen = document.getElementById("imagenactual");
	imagenActual = x;
	directorioImagenes = y;
	if (directorioImagenes = 1) {
		directorioImagenes = General;
	} else if (directorioImagenes = 2) {
		directorioImagenes = Playas;
	} else if (directorioImagenes = 3) {
		directorioImagenes = Monumentos;
	} else if (directorioImagenes = 4) {
		directorioImagenes = Flora;
	} else if (directorioImagenes = 5) {
		directorioImagenes = Fauna;
	}
	imagen.src = directorioImagenes + imagenActual + ".jpg";
	debugRutas(x);
}




/*
------------------------------------------
DATOS DEL SCRIPT VIEJO PARA TOMAR IDEAS
------------------------------------------
*/

function cambiarbackgroundsmartphone(nombreimagen) {
var backgroundsmartphone = document.getElementById("contenido");
var videopresentacion = document.getElementById("videopresentacion");
var nombredeimagenactual = document.getElementById("nombredeimagenactual");
var nombregaleriaactual = document.getElementById("galeriaimagenesactual").innerHTML;

	//Guardar nombre de la imagen en "id=nombredeimagenactual"
	nombredeimagenactual.innerHTML = nombreimagen;

	//Variables con la ruta de cada galería de imagen a tamaño medio
	var principal = "url" + "(" + "'" + "./images/1_chipiona_general/medium/" + nombreimagen + ".jpg'" + ")";
   var playageneral = "url" + "(" + "'" + "./images/2_playas/1_general/medium/" + nombreimagen + ".jpg'" + ")";
   var playaderegla = "url" + "(" + "'" + "./images/2_playas/2_playa_de_regla/medium/" + nombreimagen + ".jpg'" + ")";
   var playacruzdelmar = "url" + "(" + "'" + "./images/2_playas/3_playa_cruz_del_mar/medium/" + nombreimagen + ".jpg'" + ")";
   var playadelmolino = "url" + "(" + "'" + "./images/2_playas/4_playa_del_molino/medium/" + nombreimagen + ".jpg'" + ")";
   var playalascanteras = "url" + "(" + "'" + "./images/2_playas/5_playa_las_canteras/medium/" + nombreimagen + ".jpg'" + ")";
   var monumentos = "url" + "(" + "'" + "./images/3_monumentos/medium/" + nombreimagen + ".jpg'" + ")";
   var flora = "url" + "(" + "'" + "./images/4_flora/medium/" + nombreimagen + ".jpg'" + ")";
   var faunageneral = "url" + "(" + "'" + "./images/5_fauna/1_general/medium/" + nombreimagen + ".jpg'" + ")";
   var faunacamaleones = "url" + "(" + "'" + "./images/5_fauna/2_camaleones/medium/" + nombreimagen + ".jpg'" + ")";
   var fiestasyeventos = "url" + "(" + "'" + "./images/6_fiestas_y_eventos/1_general/medium/" + nombreimagen + ".jpg'" + ")";
   var puestasdesol = "url" + "(" + "'" + "./images/7_puestas_de_sol/medium/" + nombreimagen + ".jpg'" + ")";

	function estilosbackground() {//Función para los estilos del background reduciendo codigo en la hoja
		backgroundsmartphone.style.backgroundSize = "contain";
		backgroundsmartphone.style.backgroundRepeat = "no-repeat";
		backgroundsmartphone.style.backgroundColor = "black";
		backgroundsmartphone.style.backgroundPosition = "50% 50%";
	}

	if (nombregaleriaactual == "Galería Principal") {
		backgroundsmartphone.style.background = principal;
		estilosbackground();

   } else if (nombregaleriaactual == "Playas") {
		backgroundsmartphone.style.background = playageneral;
		estilosbackground();

	} else if (nombregaleriaactual == "Playa de Regla") {
		backgroundsmartphone.style.background = playaderegla;
		estilosbackground();

	} else if (nombregaleriaactual == "Playa cruz del Mar") {
		backgroundsmartphone.style.background = playacruzdelmar;
		estilosbackground();

	} else if (nombregaleriaactual == "Playa del Molino") {
		backgroundsmartphone.style.background = playadelmolino;
		estilosbackground();

	} else if (nombregaleriaactual == "Playa de las Canteras") {
		backgroundsmartphone.style.background = playalascanteras;
		estilosbackground();

	} else if (nombregaleriaactual == "Monumentos") {
		backgroundsmartphone.style.background = monumentos;
		estilosbackground();

	} else if (nombregaleriaactual == "Flora General") {
		backgroundsmartphone.style.background = flora;
		estilosbackground();

	} else if (nombregaleriaactual == "Fauna General") {
		backgroundsmartphone.style.background = faunageneral;
		estilosbackground();

	} else if (nombregaleriaactual == "Fauna Camaleones") {
		backgroundsmartphone.style.background = faunacamaleones;
		estilosbackground();

	} else if (nombregaleriaactual == "Fiestas y Eventos") {
		backgroundsmartphone.style.background = fiestasyeventos;
		estilosbackground();

	} else if (nombregaleriaactual == "Puestas de Sol") {
		backgroundsmartphone.style.background = puestasdesol;
		estilosbackground();

	} else {
		alert("Ha ocurrido un error al cargar la galería, prueba a recargar de nuevo la página");
	}
}
