<?php  include_once 'cabecalho.php'; ?>

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
								placeholder="20 ml" max="20" min="20" required >
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
