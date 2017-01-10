<?php 

//Recibimos todos los sujetos	
$sujetos = array(
	$_POST['sujeto1'],$_POST['sujeto2'],$_POST['sujeto3'],
	$_POST['sujeto4'],$_POST['sujeto5'],$_POST['sujeto6'],
	$_POST['sujeto7'],$_POST['sujeto8'],$_POST['sujeto9'],
	$_POST['sujeto10']);

//Sumamos todos los sujetos
$SumaSujeto="";
foreach ($sujetos as $sujeto) {
	$SumaSujeto=$SumaSujeto + $sujeto;
}

// Divide los sujetos. en tra la cantidad de ellos mismo
$DivisionSujetos= $SumaSujeto / 10;



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado - Alfa de Croanbach</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
						<h3>Resultado</h3>
				</div>
			</div>
		</div>
	</header>	
	<section>	
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
					<div class="form-group">	
						<a href="index.php" class="btn btn-info">Ir al Inicio</a>
					</div>
					<div class="form-group">
						<p><b>Suma de los sujetos:</b> <?php echo  $SumaSujeto; ?></p>	
						<p><b>Division de los 10 sujetos mas la suma:</b> <?php echo $DivisionSujetos ?></p>
					</div>
					<div class="form-group">
						<h2>	
						<?php 	
							// Vamos a sacar las base con el numero de la persona
							$n="1"; $PasoDos="";
							foreach ($sujetos as $suje) {
								echo "( $suje - $DivisionSujetos) + ";
								$PasoDos[$n]= $suje - $DivisionSujetos;
								$n++;
							}
						?>
						</h2>
						<hr>	
					</div>


					<div class="form-group">
						<h2>	
							<?php 	
								// Paso 3 - Vamos a multiplicar todo por 2 
								foreach ($PasoDos as $PasoDoss) {
										echo "(<b>$PasoDoss</b> * 2) + ";
								}
							?>	
						</h2>
						<hr>
					</div>

					<div class="form-group">
						<h2>
							<?php 	
							// Paso 3 - Vamos a multiplicar todo por 2 
							$n2=1; $PasoTres="";
							foreach ($PasoDos as $PasoDo) {
								$multi=$PasoDo * 2;
								echo "<b>($multi) + </b>";
								$PasoTres[$n2]=$PasoDo * 2;
								$n2++;
							}
							?>
						</h2>
						<hr>
					</div>

					<div class="form-group">
						<h2>
							<?php 	
							//Paso 4 - vamos a sumar los resultados y los vamos a dividir entre 10
							$n3=1; $PasoCuatro="";
							foreach ($PasoTres as $PasoTre) {
								$PasoCuatro=$PasoCuatro + abs($PasoTre);
								$n3++;
							}  echo "<b>Suma de todos los valores: </b>".($PasoCuatro);
							   echo "<br><b>Dividimos la suma / 10 = </b>".($PasoCuatro/10);
							?>
						</h2>
						<hr>
					</div>					

				</div>
			</div>
		</div>
	</section>
</body>
</html>