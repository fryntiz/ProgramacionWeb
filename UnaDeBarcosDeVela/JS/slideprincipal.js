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
		formatodefondo()
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
		formatodefondo()
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
		formatodefondo()
}



//Función Final que lo hace todo 1-limpiar 2-colorear thumbnail 3-Poner imagen

//Función que cambie la imagen (llamando a la funcion correspondiente) para cuando se accione una flecha para anterior o posterior

//Funcion Para cuando pase el ratón por encima de "slideprincipal" aparezca el texto descriptivo de "textoslide"
