<!--Selector de imágenes-->
<DIV id="cajaselectorimagenes">
	<UL id="ulselectorimagen"> <!--Con PHP traigo las imágenes por lotes del directorio y proceso con JS-->
		<?php
		header('Content-Type: text/html; charset=UTF-8');
		$longitudArrayImagenes = "0";
		$directorioImagenes = "images/1_chipiona_general/thumbnail";
		$NumeroGaleria = "1";

		function directorioPrincipal()
		{
			global $directorioImagenes;
			global $longitudArrayImagenes;
			global $NumeroGaleria;
			$arrayImagenes = dir($directorioImagenes);
			while (($archivo = $arrayImagenes->read()) !== false)
			{
				if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
					$longitudArrayImagenes++;
					echo '<LI><IMG class="selectorimagen" onclick="cambiarBackground('."$longitudArrayImagenes, $NumeroGaleria".')" src="'.$directorioImagenes."/".$archivo.'"></LI>'."\n";
				}
			}
			$arrayImagenes->close();
		}

		function cambiardirectorio() {
			global $directorioImagenes;
			if ($NumeroGaleria == 1) {
				$directorioImagenes = "images/1_chipiona_general/thumbnail";
			} else if ($NumeroGaleria == 2) {
				$directorioImagenes = "images/2_playas/thumbnail";
			} else if ($NumeroGaleria == 3) {
				$directorioImagenes = "images/3_monumentos/thumbnail";
			} else if ($NumeroGaleria == 4) {
				$directorioImagenes = "images/4_flora/thumbnail";
			} else if ($NumeroGaleria == 5) {
				$directorioImagenes = "images/5_fauna/thumbnail";
			}
			echo directorioPrincipal();
		}

		cambiardirectorio();

		echo "<SCRIPT>
						longitudArrayImagenes = $longitudArrayImagenes;
						var General = 'images/1_chipiona_general/high/';
						var Playas = 'images/2_playas/high/';
						var Monumentos = 'images/3_monumentos/high/';
						var Flora = 'images/4_flora/high/';
						var Fauna = 'images/5_fauna/high/';
					</SCRIPT>";
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
