
<?php 
include_once 'cabecalho.php';
include_once 'funcoes.php';

$qtdPepsi = $_POST["qtdPepsi"];
$qtdRun = $_POST["qtdRun"];
$qtdGelo = $_POST["qtdGelo"];

echo $qtdPepsi. ' '. $qtdRun. ' '. $qtdGelo;

$resultado = paladarPepsi($qtdPepsi, $qtdRun, $qtdGelo);

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