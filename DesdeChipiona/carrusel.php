<!--Selector de imágenes-->
<DIV id="cajaselectorimagenes">
	<UL id="ulselectorimagen"> <!--Con PHP traigo las imágenes por lotes del directorio y proceso con JS-->
		<?php
		header('Content-Type: text/html; charset=UTF-8');

		$directorioImagenes1 = "images/1_chipiona_general/thumbnail";
		$directorioActualImagenes = dir($directorioImagenes1);
		$longitudArrayImagenes = "0";
		$prueba = "probando";

		$directory="./images/1_chipiona_general/thumbnail";
    $dirint = dir($directory);
		while (($archivo = $directorioActualImagenes->read()) !== false)
		{
			if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
				$longitudArrayImagenes++;
				echo '<LI><IMG class="selectorimagen" onclick="cambiarBackground('.$longitudArrayImagenes.')" src="'.$directorioImagenes1."/".$archivo.'"></LI>'."\n";
			}
    }
    $dirint->close();

		//echo "<SCRIPT>"."var longitudArrayImagenes = ".$longitudArrayImagenes."</SCRIPT>";
		echo "<SCRIPT>
						longitudArrayImagenes = $longitudArrayImagenes;
					</SCRIPT>";
		/*
		echo "<SCRIPT>
						longitudArrayImagenes = $longitudArrayImagenes;
						directorioActualImagenes = 'No consigo que funcione la variable para la ruta actual de imágenes';
					</SCRIPT>";
		*/
	?>
	</UL>
</DIV>


		<DIV id="cajacarrusel">
			<DIV id="carruselsuperior"></DIV>
			<DIV id="cajaestilosimagen">
				<DIV id="estilosimagen">
					<DIV id="blancoynegro" class="todoslosefectos"></DIV>
					<DIV id="sepia" class="todoslosefectos"></DIV>
					<DIV id="a" class="todoslosefectos"></DIV>
					<DIV id="b" class="todoslosefectos"></DIV>
				</DIV>
			</DIV>
			<DIV id="cajaflechaizq">
				<DIV id="flechaizq"></DIV>
			</DIV>

			<DIV id="cajaflechadrh">
				<DIV id="flechadrh"></DIV>
			</DIV>

			<IMG id="fondoimagen" src="images/fondoCarrusel.jpg" alt="carrusel"/>

			<DIV id="centrarimagenactual">
				<IMG id="imagenactual" src="images/presentacion.png" alt="presentación"/>
			</DIV>

			<DIV id="carruselinferior"></DIV>
		</DIV>


