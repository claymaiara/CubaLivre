<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
			<p class="navbar-text">Seja Bem Vindo</p>
		</nav>
		<div class="jumbotron">
			<h1>Você escolheu Coca Cola</h1>
			<p>Agora informe as quantidades desejadas :)</p>

		</div>
		<div class="panel panel-success">
			<div class="panel-heading">Você optou por Coca Cola, agora escolha as
				quantidades:</div>
			<div class="panel-body">

				<form class="form-horizontal" action="calculaCoca.php" method="POST">
					<div class="form-group">
						<label for="qtdCoca" class="col-sm-4 control-label">Quantidade de
							Pepsi: (50-60 ml)</label>
						<div class="col-sm-2">
							<input type="number" class="form-control" id="qtdCoca"
								name="qtdCoca" placeholder="50 - 70 ml" id="qtdRefri" required
								max="60" min="50">
						</div>
						<label for="qtdRun" class="col-sm-4 control-label">Quantidade de
							Run: (10-30 ml)</label>
						<div class="col-sm-2">
							<input type="number" class="form-control" id="qtdRun"
								placeholder="10 - 30 ml" id="qtdRun" name="qtdRun" max="30"
								min="10" required>
						</div>
						<label for="qtdGelo" class="col-sm-4 control-label">Quantidade
							de Gelo: (20ml)</label>
						<div class="col-sm-2">
							<input type="number" class="form-control" id="qtdGelo" name="qtdGelo"
								placeholder="20 ml" required value="20">
						</div>
					</div>
					<button type="submit" class="btn btn-success">
						<span class="glyphicon glyphicon-thumbs-up"></span> Confirmar
					</button>
					<a href="index.php" class="btn btn-success">Voltar</a>
			</form>
			</div>

		</div>
		<nav class="navbar navbar-inverse" role="navigation"></nav>
	</div>
</body>
</html>
