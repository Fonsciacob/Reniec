
<?php 
$dni = htmlentities($_POST['dni']);

error_reporting(0);

$url = "https://dniruc.apisperu.com/api/v1/dni/".$dni."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImZvbnNjaWFfY29iMTkwNUBob3RtYWlsLmNvbSJ9.tpg2bE2VBIWvn2BjTc4NcFe6UrN-kbejefRfmc8goh8 ";

$jsonpractica=file_get_contents($url);

$datos=json_decode($jsonpractica);

$dni=$datos->{'dni'};
$nombres=$datos->{'nombres'};
$apellidoPaterno=$datos->{'apellidoMaterno'};
if ($nombres) {
	
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<title>Document</title>
	</head>
	<body>
		<form action="registrar.php" method="POST" class="form p-2 container col-lg-4">
		<div class="d-flex justify-content-between">
			<input type="text" value="<?php echo $dni ?>" name="txtDni" class="form-control w-50">
			<input type="text" value="<?php echo $nombres ?>" name="txtNombre" class="form-control w-50">
		</div>
		<button type="submit" class="btn btn-primary mt-2">Registrar</button>
		</form>
	</body>
	</html>
	<?php
}else{
	echo "No existe datos del DNI ingresado.";
}
 
	
	

 ?>