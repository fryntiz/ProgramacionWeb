//Variables Globales
	//Imagen actual en el slide
		var slideImagenActual = 1;
	//Mover o no Mover slide automaticamente
		var autoSlide = "true";

//Función para limpiar borde de miniaturas
function limpiarSelecciones() {
	//Variables
		var img1 = document.getElementById("imgdegalaeriaprincipal1");
		var img2 = document.getElementById("imgdegalaeriaprincipal2");
		var img3 = document.getElementById("imgdegalaeriaprincipal3");
		var img4 = document.getElementById("imgdegalaeriaprincipal4");

	//Limpiar todo
		img1.style.boxShadow = "none";
		img2.style.boxShadow = "none";
		img3.style.boxShadow = "none";
		img4.style.boxShadow = "none";
}

//Función que da formato a la imagen de FONDO
function formatodefondo() {
	var slide = document.getElementById("slideprincipal");

	slide.style.backgroundRepeat = "no-repeat";
	slide.style.backgroundPosition = "center";
	slide.style.backgroundSize = "cover";

	//slideImagenActual = 1;
}

function cambiarImagen1() {
	//Variables
		var img1 = document.getElementById("imgdegalaeriaprincipal1");
		var slide = document.getElementById("slideprincipal");

	//Función para limpiar
		limpiarSelecciones();

	//Colorear borde thumbnail
		img1.style.boxShadow = "5px 5px 5px black, -5px 5px 5px black, 5px -5px 5px black, -5px -5px 5px black";

	//Cambiar Imagen de fondo en el Slide
		slide.style.background = "url('images/galeria_principal/full/1.jpg')";

	//Dar formato a la imagen de fondo
		formatodefondo()

	slideImagenActual = 1;
}

function cambiarImagen2() {
	//Variables
		var img2 = document.getElementById("imgdegalaeriaprincipal2");
		var slide = document.getElementById("slideprincipal");

	//Función para limpiar
		limpiarSelecciones();

	//Colorear borde thumbnail
		img2.style.boxShadow = "5px 5px 5px black, -5px 5px 5px black, 5px -5px 5px black, -5px -5px 5px black";

	//Cambiar Imagen de fondo en el Slide
		slide.style.backgroundImage = "url('images/galeria_principal/full/2.jpg')";

	//Dar formato a la imagen de fondo
		formatodefondo();

	slideImagenActual = 2;
}

function cambiarImagen3() {
	//Variables
		var img3 = document.getElementById("imgdegalaeriaprincipal3");
		var slide = document.getElementById("slideprincipal");

	//Función para limpiar
		limpiarSelecciones();

	//Colorear borde thumbnail
		img3.style.boxShadow = "5px 5px 5px black, -5px 5px 5px black, 5px -5px 5px black, -5px -5px 5px black";

	//Cambiar Imagen de fondo en el Slide
		slide.style.backgroundImage = "url('images/galeria_principal/full/3.jpg')";

	//Dar formato a la imagen de fondo
		formatodefondo();

	slideImagenActual = 3;
}

function cambiarImagen4() {
	//Variables
		var img4 = document.getElementById("imgdegalaeriaprincipal4");
		var slide = document.getElementById("slideprincipal");

	//Función para limpiar
		limpiarSelecciones();

	//Colorear borde thumbnail
		img4.style.boxShadow = "5px 5px 5px black, -5px 5px 5px black, 5px -5px 5px black, -5px -5px 5px black";

	//Cambiar Imagen de fondo en el Slide
		slide.style.backgroundImage = "url('images/galeria_principal/full/4.jpg')";

	//Dar formato a la imagen de fondo
		formatodefondo();

	slideImagenActual = 4;
}

//Funcion Para cuando pase el ratón por encima de "slideprincipal" aparezca el texto descriptivo de "textoslide"
function mostrarDescripcion() {
	var slide = document.getElementById("slideprincipal");
	var textoslide = document.getElementById("textoslide");

	textoslide.style.opacity = 0.7;
	//Parar auto pase del slide
	autoSlide = "false";
}

function ocultarDescripcion() {
	var slide = document.getElementById("slideprincipal");
	var textoslide = document.getElementById("textoslide");

	textoslide.style.opacity = 0;
	//Activar auto pase del slide
	autoSlide = "true"
}

//Función que cambie la imagen (llamando a la funcion correspondiente) para cuando se accione una flecha para anterior o posterior
function cambiarImagenSlide(direccion) {
	if (direccion == "derecha") {
		//Acciones para cuando se mueve a la derecha
			slideImagenActual = slideImagenActual + 1;
			if (slideImagenActual == 1) {
				cambiarImagen1();
			} else if (slideImagenActual == 2) {
				cambiarImagen2();
			} else if (slideImagenActual == 3) {
				cambiarImagen3();
			} else if (slideImagenActual == 4) {
				cambiarImagen4();
			} else {
				cambiarImagen1();
			}
	} else if (direccion == "izquierda") {
		//Acciones para cuando se mueve a la izquierda
			slideImagenActual = slideImagenActual - 1;
			if (slideImagenActual == 0) {
				slideImagenActual = slideImagenActual + 1;
				cambiarImagen1();
			}else if (slideImagenActual == 1) {
				cambiarImagen1();
			} else if (slideImagenActual == 2) {
				cambiarImagen2();
			} else if (slideImagenActual == 3) {
				cambiarImagen3();
			} else if (slideImagenActual == 4) {
				cambiarImagen4();
			} else {
				cambiarImagen1();
			}
	} else {
		alert("Ha ocurrido un error, no se puede hacer esto por el momento");
	}
}

//Cambiar SLIDE automaticamente según el estado de la variable autoSlide
function autoCambiarSlide() {
	var slide = document.getElementById("slideprincipal");

	if (autoSlide == "true") {
		cambiarImagenSlide("derecha");
	} else if (autoSlide == "false") {

	}
}
