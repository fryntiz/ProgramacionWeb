<!--Selector de imágenes-->
<DIV id="cajaselectorimagenes">
	<UL id="ulselectorimagen"> <!--En las siguientes imágenes se escribe el nombre sin extensión, la extensión tiene que ser ".jpg" tal y como está definido en la función para pintar la imagen como background-->
		<LI><DIV id="selectorimagen1" class="selectorimagen" onclick="cambiarbackgroundsmartphone('1')"></DIV></LI>
		<LI><DIV id="selectorimagen2" class="selectorimagen" onclick="cambiarbackgroundsmartphone('2')"></DIV></LI>
		<LI><DIV id="selectorimagen3" class="selectorimagen" onclick="cambiarbackgroundsmartphone('3')"></DIV></LI>
		<LI><DIV id="selectorimagen4" class="selectorimagen" onclick="cambiarbackgroundsmartphone('4')"></DIV></LI>
		<LI><DIV id="selectorimagen5" class="selectorimagen" onclick="cambiarbackgroundsmartphone('5')"></DIV></LI>
		<LI><DIV id="selectorimagen6" class="selectorimagen" onclick="cambiarbackgroundsmartphone('6')"></DIV></LI>
		<LI><DIV id="selectorimagen7" class="selectorimagen" onclick="cambiarbackgroundsmartphone('7')"></DIV></LI>
		<LI><DIV id="selectorimagen8" class="selectorimagen" onclick="cambiarbackgroundsmartphone('8')"></DIV></LI>
		<LI><DIV id="selectorimagen9" class="selectorimagen" onclick="cambiarbackgroundsmartphone('9')"></DIV></LI>
		<LI><DIV id="selectorimagen10" class="selectorimagen" onclick="cambiarbackgroundsmartphone('10')"></DIV></LI>
		<LI><DIV id="selectorimagen11" class="selectorimagen" onclick="cambiarbackgroundsmartphone('11')"></DIV></LI>
		<LI><DIV id="selectorimagen12" class="selectorimagen" onclick="cambiarbackgroundsmartphone('12')"></DIV></LI>
		<LI><DIV id="selectorimagen13" class="selectorimagen" onclick="cambiarbackgroundsmartphone('13')"></DIV></LI>
		<LI><DIV id="selectorimagen14" class="selectorimagen" onclick="cambiarbackgroundsmartphone('14')"></DIV></LI>
		<LI><DIV id="selectorimagen15" class="selectorimagen" onclick="cambiarbackgroundsmartphone('15')"></DIV></LI>
		<LI><DIV id="selectorimagen16" class="selectorimagen" onclick="cambiarbackgroundsmartphone('16')"></DIV></LI>
		<LI><DIV id="selectorimagen17" class="selectorimagen" onclick="cambiarbackgroundsmartphone('17')"></DIV></LI>
		<LI><DIV id="selectorimagen18" class="selectorimagen" onclick="cambiarbackgroundsmartphone('18')"></DIV></LI>
		<LI><DIV id="selectorimagen19" class="selectorimagen" onclick="cambiarbackgroundsmartphone('19')"></DIV></LI>
		<LI><DIV id="selectorimagen20" class="selectorimagen" onclick="cambiarbackgroundsmartphone('20')"></DIV></LI>
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

<?php
		$directorioActualImagenes = dir($directorioImagenes1);
		$directorioImagenes1 = "./images/1_chipiona_general/thumbnail";


		$directory="./images/1_chipiona_general/thumbnail";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            echo '<img src="'.$directory."/".$archivo.'">'."\n";
        }
    }
    $dirint->close();
	?>
