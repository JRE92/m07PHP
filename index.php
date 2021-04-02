<html>
	<body>
		<?php
			echo "<h1>Hola mundo!</h1>"."<h2>Cómo estás?</h2>";

			//Variables
			$variable = 10;
			$_Variable = "Hola";

			$numero1 = 3242;
			$numero2 = 54;
			$division = $numero1 / $numero2;
			$division = sprintf("%.2f", $division);
			echo "El resultado de dividir ".$numero1." entre ".$numero2." es: ".$division."<br/>";
			//echo "El resultado de dividir $numero1 entre $numero2 es: $division";

			define("TAM", 5);
			$n = 1;
			echo "<table border='1'>";
			for($i=0;$i<TAM;$i++){
				echo "<tr>";
				for($j=0;$j<TAM;$j++){
					echo "<td>$n</td>";
					$n++;
				}
				echo "</tr>";
			}
			echo "</table><br/><br/>";

			$miArray = array();
			$miArray[0] = 0;
			$miArray[1] = 1;
			$miArray[2] = 2;

			$miArray2 = array(1, 2, 3, 4, 5);

			$miArray3 = array("clave1" => 1, "clave2" => 2, "clave3" => 3);
			//var_dump($miArray3);
			foreach($miArray3 as $clave => $valor){
				echo "$clave => $valor<br/>";
			}
		?>
	</body>
</html>