<?php require_once 'cabecalho.php'; ?>
<section class="primeira">
	<h1>Salário Bruto</h1>
<?php
	$nome=$_POST['nome'];
	$horast=$_POST['horast'];
	$valorh=$_POST['valorh'];
	$salariobruto=$horast*$valorh;
	$salariobruto=number_format($salariobruto, 2, ',','.');
	echo "<p>Caro(a) $nome, </p>";
	echo "<p>Seu salário bruto é de R$ $salariobruto</p>";
?>
</section>
</body>
</html>
