<?php  include_once 'cabecalho.php'; ?>
		<div class="jumbotron">
			<h1>Você escolheu Pepsi</h1>
			
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">Agora escolha as
				quantidades:</div>
			<div class="panel-body">
				
				<form action="calculaPepsi.php" method="POST" class="form-horizontal">
					<div class="form-group">
						<label for="qtdPepsi" class="col-sm-4 control-label">Quantidade
							de Pepsi: (60-70 ml)</label>
						<div class="col-sm-2">
							<input class="form-control" id="qtdPepsi" name="qtdPepsi"
								placeholder="60 - 70 ml" id="qtdRefri" type="number" max="70" min="60" required>
						</div>
						<label for="qtdRun" class="col-sm-4 control-label">Quantidade de
							Run: (10-30 ml)</label>
						<div class="col-sm-2">
							<input type="number"  class="form-control" id="qtdRun" name="qtdRun"
								placeholder="10 - 30 ml" id="qtdRun"  max="30" min="10" required>
						</div>
						<label for="qtdGelo" class="col-sm-4 control-label">Quantidade
							de Gelo: (20ml)</label>
						<div class="col-sm-2">
							<input type="number" class="form-control" id="qtdGelo" name="qtdGelo"
								placeholder="20ml" id="qtdGelo" max="20" min="20" required>
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
