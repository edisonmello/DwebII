<?php 
		include 'header.php';
		$aula_atual = 'tipos-dados';
	?>


	<body>

		<h2>Tipos de Dados</h2>
		<hr>
		<small>Desenvolvimento Web II</small>
		<br>
		<small>	Quatro tipos escalares:</small>
		<br>
			
			<ul>
				<li>boolean</li>
				<li>integer</li>
				<li>float (número de ponto flutuante, ou também double)</li>
			</ul>
			
			<small>Três tipos compostos:</small>
			<ul>
				<li>array</li>
				<li>object</li>
				<li>callable</li>	
			</ul>
			<small>	E finalmente dois tipos especiais:</small>
		<br>
			<ul>
				<li>resource</li>
				<li>NULL</li>	
			</ul>			


		<h3>Função var_dump</h3>

		<?php 
			$nome = 'Edison';
			$saldo = 965.35; 

		?>

		<h4>Tipo da variável $nome: </h4>
		<p><?php var_dump($nome);?></p>

		<br>

		<h4>Tipo da variável $saldo: </h4>
		<p><?php var_dump($saldo);?></p>
		


		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>