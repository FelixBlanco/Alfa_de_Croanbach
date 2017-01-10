<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alfa de Croanbach</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Alfa de Croanbach</h1>
				</div>
				<div class="col-md-8">	
				</div>
			</div>
		</div>
	</header>
	<section>	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">	
						<b>Nota: </b> Proceso desarrollado nada mas para las mujeres mas hermosas de latinoamerica, como lo son las <b>	Hermanas Evariste </b>.
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">	
					<div class="form-group">	
						<h3><b>¿Como Funciona?</b></h3>
					</div>
					<div class="form-group">	
						<p class="text-justify" style="padding: 20px;">
							La idea es que se agregen las encuentas de sujetos que tiene y el sistema se va a encargar de sacar todo lo demas. <br> <br>	

							al precionar Calcular el sistema mostra el resultado correspondiente de todo los calculos que necesitan. <br> <br>	

							Hasta el momento solo calculara 10 sujetos.	
						</p>
					</div>
				</div>
				<div class="col-md-6">	
					<form action="proceso.php" method="POST">
						<div class="form-group">
							<h2>Agrega la Cantidad de cada sujeto</h2>
						</div>
						<?php for($n=1;$n <= 10; $n++): ?>
						<div class="form-group">	
							<label for="">Sujeto <?php echo $n; ?> </label>
							<input type="text" name="sujeto<?php echo $n; ?>" class="form-control">
						</div>
						<?php endfor; ?>
						<div class="form-group text-right">	
							<button class="btn btn-success">Calcular</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>