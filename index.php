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

		<div class="main">
			<h1>Calculador de Gentamicina</h1>
			<h3>Esta calculadora de Gentamicina se usa para pacientes en estado critico con sepsis de origen desconocido. 
				<p>Ingresa los datos correspondientes a tu paciente y haz click en "Calcular" para recibir la dosis estimada de Gentamicina.</p></h3>
			<h5>ADVERTENCIA: Esta calculadora no esta programada para uso clinico.</h5>


		
		<form method="POST" action="calculate.php">



			<div class="input-section">
				<h3>Peso (Kg)</h3>
				<input type="number" name="peso" required>
			</div>





			<div class="input-section">
				<h3>Altura (cm)</h3>
				<input type="number" name="altura" required>
			</div>




			<div class="input-section">
				<h3>TFGe (ml/min/1.73m2)</h3>
				<input type="number" name="TFGe" required>
			</div>




			<div class="input-section">
				<h3>sexo</h3>
				<select name="sexo">
					<option>masculino</option>
					<option>femenino</option>
				</select>
			</div>




			<div class="input-section">
				<button type="submit">Calcular</button>
			</div>


		</form>


		</div>




	</body>

</html>