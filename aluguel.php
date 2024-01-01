<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/codigo.css">
	<title>Projeto PHP</title>

	<style type="text/css">

		header{
			position: fixed;
			width: 100%;
		}

		.formulario{
			
			color: #000;
			padding: 10px;
			font-size: 1.9rem;
			font-weight: bold;
			text-align: left;
		}

		input{

			font-size: 1.7rem;
			padding: 4px;
			border-radius: 10px;
			border: solid;
			font-weight: bold;
		}

		h2{
			text-align: left;
			padding: 10px;
		}
		#enviar{
			background-color: rgba(0, 255, 0, 1.0);
		}
		p{
			font-size: 1.6rem;
			padding: 10px ;
		}
		#grid-container{
			background-color: rgba(0, 0, 255, 0.15);
		}
		.grid{
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
			grid-gap: 5px;
			max-width: 1200px;
			margin: 0 auto;
		}
		
		.grid div {
			font-size: 1.6rem;
			text-align: center;
			background-color: rgba(255, 255, 255, 1.0);
			padding-bottom: 25px;

		}
		h1{
			text-align: center;
		}
		img{
			width: 85%;
			height: 80%;
		}
		a{
			font-size: 1.rem;
			color: #000;
			font-weight: bold;
			text-decoration: none;
		}
		fieldset{
			border: solid;
			padding: 3%;
			font-size: 1.7rem;
			font-weight: bold;
			text-align: left;
			border-radius: 20px;
		}
		select{
			border-radius: 10px;
			border: solid;
			padding: 5px;
			font-size: 1.7rem;
			font-weight: bold;
		}
		option{
			font-size: 1.7rem;
			font-weight: bold;
			padding: 5px;
		}

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
                <?php

                    $data= $_GET["data"];
                    $tempo= $_GET["tempo"];
                    $modelo= $_GET["modelo"];
                    $nome= $_GET["nome"];
                    $obs= $_GET["obs"];

                    $modelo1 = $tempo*100;
                    $modelo2 = $tempo*200;
                    $modelo3 = $tempo*300; 

                    echo "Olá Sr(a) $nome, seja muito bem vindo(a) a nossa pagina de orçamentos. <br><br>";
                    echo " O modelo escolhido foi: $modelo <br><br>";
                    echo " Data da consulta: $data OBS: Orçamento valido por 15 dias apos essa data<br><br>";


                    if($modelo == "hatch"){

                        echo "O valor total do orçamento é de R$ $modelo1<br><br>";

                    }elseif($modelo == "sedan"){
                        echo "O valor total do orçamento é de R$ $modelo2<br><br>";
                    
                    }else{
                        echo "O valor total do orçamento é de R$ $modelo3<br><br>";
                    }
                    
                    echo "Observação adicional do cliente: $obs <br><br>";
                    echo "Agradecemos por sua consulta Sr(a) $nome <br>";

                ?>
            <br><br>
            <h5>Whatsapp para contato: (xx) xxxxx-xxxx</h5>
            <a href="index.php"> << VOLTAR </a><br>

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