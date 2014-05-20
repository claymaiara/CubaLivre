
<?php 
include_once 'cabecalho.php';
include_once 'funcoes.php';

$qtdCoca = $_POST["qtdCoca"];
$qtdRun = $_POST["qtdRun"];
$qtdGelo = $_POST["qtdGelo"];

echo $qtdCoca. ' '. $qtdRun. ' '. $qtdGelo;

$resultado = paladarCoca($qtdCoca, $qtdRun, $qtdGelo);

if($resultado=='fraco'){?>
<div class="alert alert-info"> Seu Drink está fraco!</div>
<?php 	
} elseif ($resultado=='suave'){?>
<div class="alert alert-info"> Seu Drink está suave!</div>
<?php 
} elseif ($resultado=='forte'){ ?>
 <div class="alert alert-info"> Seu Drink está forte!</div>
<?php } ?>

<a href="index.php" class="btn btn-success">Voltar</a>
</body>
</html>