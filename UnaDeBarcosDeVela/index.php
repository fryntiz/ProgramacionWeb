<!DOCTYPE html>
<HTML lang="es">
<?php
	include 'head.php';
?>

	<BODY id="inicio">
		<?php
			include 'menuSuperior.php';
		?>

		<DIV id="cajageneral">
			<DIV id="cajagaleriaprincipal">
				<DIV id="imgdegalaeriaprincipal1" class="galeriaprincipal" onclick="cambiarImagen1()"></DIV>
				<DIV id="imgdegalaeriaprincipal2" class="galeriaprincipal" onclick="cambiarImagen2()"></DIV>
				<DIV id="imgdegalaeriaprincipal3" class="galeriaprincipal" onclick="cambiarImagen3()"></DIV>
				<DIV id="imgdegalaeriaprincipal4" class="galeriaprincipal" onclick="cambiarImagen4()"></DIV>
			</DIV>
			<DIV id="cajaslideprincipal">
				<DIV id="flechaizq" class="flechas" onclick="cambiarImagenSlide('izquierda')"></DIV>
				<DIV id="slideprincipal" onMouseOver="mostrarDescripcion()" onMouseOut="ocultarDescripcion()">
					<DIV id="textoslide">
						<H3>Título del barco o nombre</H3>
						<DIV>
							Texto Describiendo el barco (Resumiendo).
							<BR/>Como mucho 3 lineas.
							<BR/>Terminando con un enlace así: y puedes <A href=#>leer más aquí...</A>
						</DIV>
					</DIV>
				</DIV>
				<DIV id="flechadrh" class="flechas" onclick="cambiarImagenSlide('derecha')"></DIV>
			</DIV>
		</DIV>

		<DIV id="cajadescripcionempresa">
			<DIV id="descripcionempresa">
				<H3>Nuestro trabajo</H3>
				<DIV>
					Texto descriptivo
				</DIV>
				<BR/>
				<H3>Nuestros Objetivos</H3>
				<DIV>
					Texto descriptivo
				</DIV>
			</DIV>
		</DIV>

		<?php
			include 'pieDePagina.php'
		?>
	</BODY>
</HTML>
