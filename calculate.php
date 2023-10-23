<html lang="en">

	<head>
		<!--
		In the <head> tag, you may choose to load any files or other assets required for your page. You might also choose to set some page settings, such as the <title>.

		The text in here will not be visible in the user's browser.

		For now, let's put some settings in and load some files that I think are good for every beginner:
		-->

		<title>Calculador de gentamicina</title>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


		<!-- EL PRIMER PASO FUE VINCULAR: style.css con index.php-->
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Aquí agregue el font: Poppins-->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">


		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body>



		<?php

			$peso = $_POST['peso'];
			$altura = $_POST['altura'];
			$TFGe = $_POST['TFGe'];
			$sexo = $_POST['sexo'];

			if ($TFGe >= 60) {
				$dosePerKG = 7;
				$maxDose = 700;
			}

			if ($TFGe >= 40 and $TFGe <60) {
				$dosePerKG = 5;
				$maxDose = 550;
			}

			if ($TFGe < 40) {
				$dosePerKG = 4;
				$maxDose = 400;
			}




			$heightInMetres = $altura / 100;
			$BMI = $peso / ($heightInMetres * $heightInMetres);

			if ($BMI >= 30) {

				if ($sexo == 'masculino') {
					$peso = 50 + 0.91 * ($altura - 152.4);
				} else {
					$peso = 45.5 + 0.91 * ($altura - 152.4);
				}

			}

			$dose = $peso * $dosePerKG;
			$dose = round($dose);

			if ($dose > $maxDose) {
				$dose = $maxDose;
			}

		?>






		<div class="main">
			<h1>Resultados</h1>
			<h5>ADVERTENCIA: Este resultado no es para uso clinico.</h5>
			

			<div class="result">
				
				<h2>La dosis sugerida es:</h2>
				<h1><?php echo $dose; ?>mg</h1>



				<p>
					<?php echo 'El calculo esta basado en una persona del sexo '.$sexo. ', con un peso de '.$peso.' kilogramos, con una altura de '.$altura.' centimetros, y una TFGe de '.$TFGe.'ml/min/1.73m²'; ?>
				</p>



			</div>


			<div class="back">
				<a href="index.php">Regresar a la calculadora </a>
			</div>


		</div>




	</body>

</html>