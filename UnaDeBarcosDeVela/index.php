<!DOCTYPE html>
<HTML lang="es">
<?php
	include 'head.php';
?>

	<BODY id="inicio">
		<DIV id="lineasuperior"></DIV>
		<DIV id="cajatitulo">
			<IMG id="logo" src="images/logo.png" alt="Logotipo"/>
			<DIV id="titulo"><H1>Barcos de Vela</H1></DIV>
		</DIV>

		<DIV id="cajamenuprincipal">
			<DIV id="menuprincipal">
				<UL>
					<A href="index.html"><LI id="enlaceinicio">INICIO</LI></A>
					<A href="#"><LI id="enlaceempresa">EMPRESA</LI></A>
					<A href="embarcaciones_de_vela.html"><LI id="enlaceembarcaciones">EMBARCACIONES DE VELA</LI></A>
					<A href="#"><LI id="enlaceveleria">VELERÍA</LI></A>
					<A href="contacto.html"><LI id="enlacecontacto">CONTACTO</LI></A>
				</UL>
			</DIV>
		</DIV>

		<DIV id="cajaRedesSociales">
			<DIV id="correo" class="redessociales"></DIV>
			<DIV id="facebook" class="redessociales"></DIV>
			<DIV id="videos" class="redessociales"></DIV>
		</DIV>

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

		<DIV id="piedepagina">
			Correo: sdfgvdfsfgsdfg@gmail.com
			<BR/>
			Teléfono: 123123123
			<BR/>
			Derechos de autor
		</DIV>

		<DIV id="cajaflechasubir">
			<A href="#titulo">
				<DIV id="flechasubir"></DIV>
				<P onmouseOver="mostrarSubirPagina()" onmouseout="noMostrarSubirPagina()">Ir al Principio</P>
			</A>
		</DIV>
	</BODY>
</HTML>
