
<!DOCTYPE html>
<HTML lang="es">
   <HEAD>

		<?php
			include 'html-head.php';
		?>
	</HEAD>

	<BODY onkeydown="return false">
		<?php


			include 'menu-superior-fixed.php';

			include 'titulo-y-logo.php';

			include 'carrusel.php';

			include 'desplegable-izquierda.php'
		?>
		<DIV id="cajacontenido">
			<?php
				include 'contenido.php';

				include 'barra-derecha.php';
			?>
		</DIV>

		<?php
			include 'pie-de-pagina.php';
		?>
	</BODY>
</HTML>
