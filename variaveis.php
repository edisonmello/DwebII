<?php 
		include 'header.php';
		$aula_atual = 'variaveis';
	?>


	<body>

		<h2>VARIÁVEIS</h2>
		<hr>
		<small>Desenvolvimento Web II</small>
		<br>
		<small>As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. Os nomes de variável 
		são case-sensitive.</small>
		<br>
		<h3>Apresentar valor de variáveis</h3>

		<?php 

			$nome = "Edison";
			$sobrenome = "Mello";
			$saldo = 7500.00;
		?>

		<h4>Nome: </h4>
		<p><?php echo $nome . " " . $sobrenome;?></p>

		<br>

		<h4>Saldo: </h4>
		<p><?php echo $saldo?></p>

		<br>

		<h4>Mensagem: </h4>
		<p><?php echo "Olá: " . $nome . " " . $sobrenome . " Seu saldo é de: " . $saldo . " reais.";?></p>
		

		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>