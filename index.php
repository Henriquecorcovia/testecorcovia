<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/codigo.css">
	<link rel="stylesheet" type="text/css" href="css/carros.css">
	<title>Projeto PHP</title>

	<style type="text/css">


		

	</style>
	
</head>
<body>

	<header>
		<h3>Programação PHP</h3><b>
		<h4>Henrique corcovia</h4>
	</header>
	<br><br><br><br><br><br><br><br><br>

	<section >
		<br><br><br><br>
		<h1>Aluguel de veiculos</h1><br>
		<h2>modelo de pagina</h2>
		
		<div class="formulario">

			<form action="analise.php" method="get" target="">

				<label for="pesquisa">Pesquisar</label>&nbsp

				<input type="text" id="pesquisa" name="pesquisa" placeholder="Digite aqui a sua pesquisa!">

				
				<br><br>
				<input type="submit" id="enviar" name="Enviar" value="pesquisar"><br>

			</form>
		</div>
		<br><br>
		<section class="container" id="grid-container">

			<div class="grid">

			<div>
				<h2>Hatch</h2>
				<img src="img/hatch.png" alt="Carro hatch"><br>
				<a href="hatch.html">CLIQUE PARA ALUGAR</a>
			</div>



			<div>
				<h2>Sedan</h2>
				<img src="img/sedan.png" alt="carro sedan"><br>
				<a href="sedan.html">CLIQUE PARA ALUGAR</a>
			</div>

			<div>
				<h2>SUV</h2>
				<img src="img/suv.png" alt="carro suv"><br>
				<a href="suv.html">CLIQUE PARA ALUGAR</a>
			</div>
			<!--
			<div>conteudo4</div>

			<div>conteudo5</div>

			<div>conteudo6</div>
							-->  
			</div>
		</section>
		<br><br>

		<section>

			<fieldset>
				<legend><h2>Faça seu orçamento de aluguel.</h2></legend>

				<form action="aluguel.php" method="get" target="">

					<label for="data">Data do orçamento</label><br>
					<input type="date" id="data" name="data">
					<br><br>
					<label for="tempo">Tempo de aluguel (dias)</label><br>
					<input type="text" id="tempo" name="tempo">
					<br><br>

					<label>Escolha o veiculo (modelo)</label><br>

					<select name="modelo">
						<option>hatch</option>
						<option>sedan</option>
						<option>SUV</option>
					</select>
					<br><br>
					<label for="nomeCliente">Insira seu nome</label><br>
					<input type="text" id="nomeCliente" name="nome" placeholder="Insira seu nome completo">
					<br><br>
					
					<label for="obs">Observações adicionais</label><br>
					<input type="text" id="obs" name="obs" placeholder="Alguma observação?">
					<br><br>
					<input type="submit" name="Enviar">
				</form>
			</fieldset>

		</section>
		<br><br>

	
	<footer>
		<h3>Henrique corcovia</h3>
		<h4>Prototipo SITE</h4>
		<h4>Pagina modelo para desenvolvimento web</h4>
		<br>
		<p class="rodape"><b>contatos<b></p>
		<br>
		<p class="rodape">E-mail: henriquecorcovia@gmail.com</p>
		<br>
		<p class="rodape">cnpj:00.000.000/0001-00</p>
		<br>
		<h6>Desenvolvido por Henrique corcovia</h6>
	</footer>

</body>
</html>