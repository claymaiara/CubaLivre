<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 

include_once 'funcoes.php';

$qtdCoca = $_POST["qtdCoca"];
$qtdRun = $_POST["qtdRun"];
$qtdGelo = $_POST["qtdGelo"];

echo $qtdCoca. ' '. $qtdRun. ' '. $qtdGelo;

$resultado = paladarCoca($qtdCoca, $qtdRun, $qtdGelo);

if($resultado=='fraco'){?>
<div class="alert alert-info"> Seu Drink est� fraco!</div>
<?php 	
} elseif ($resultado=='suave'){?>
<div class="alert alert-info"> Seu Drink est� suave!</div>
<?php 
} elseif ($resultado=='forte'){ ?>
 <div class="alert alert-info"> Seu Drink est� forte!</div>
<?php } ?>



</body>
</html>