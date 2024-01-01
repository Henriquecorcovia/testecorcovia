<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/codigo.css">
	<title>Projeto PHP</title>
	<style type="text/css">
		h2{
			text-align: left;
		}
	</style>

	

	</style>
	
</head>
<body>

	<header>
		<h3>Programação PHP</h3><b>
		<h4>Henrique corcovia</h4>
	</header>
	<br>

	<section >

		<h1>projeto inicial</h1><br>
		<h2>Resultado da pesquisa</h2><br>

		<?php

			$pesquisa = $_GET["pesquisa"];

			switch ($pesquisa) {

				case 'hatch':

					echo "<h2>O que é tipo de veículo hatch?</h2>
						<p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, 
						que fica junto com o porta-malas.</p>
						<p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
						
						<p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. 
						Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>
";

					break;

					case 'sedan':

					echo "<h2>Carro para toda família</h2>

						<p>Com seu espaço interno e um generoso porta-malas, 
						sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. 
						Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
						
						<p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, 
						e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";

					break;

					case 'suv':

					echo "<h2>SUV</h2>
						<p>Em sua definição básica, SUV é a sigla para Sport Utility Vehicle, ou Veículo Utilitário Esportivo, ou seja,</p>
						um carro destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. 
						Normalmente é equipado com tração nas quatro rodas e caracteristicamente de porte avantajado.</p>
						
						<p>Qual a diferença de um carro SUV?</p>
						<p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, 
						confortáveis e arrojados. <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p>";

					break;

					
				default:

					echo "Não encontramos  um item correspondente a sua pesquisa. Tente novamete.<br><br>";

					break;
			}

		?>

		<br> 
		<a href="index.php"> << voltar ao inicio </a>
		
		
	</section>
	<br>

	
	<footer>
		<h3>Henrique corcovia</h3>
		<h4>Prototipo SITE</h4>
		<br>
		<p class="rodape"><b>contatos<b></p>
		<br>
		<p class="rodape">E-mail: henriquecorcovia@gmail.com</p>
		<br>
		<p class="rodape">Whatsapp:(44 9-97395649</p>
		<br>
		<p class="rodape">cnpj:00.000.000/0001-00</p>
		<br>
		<p class="rodape">Desenvolvido por </p>
		<p class="rodape">Henrique corcovia</p>
	</footer>

</body>
</html>