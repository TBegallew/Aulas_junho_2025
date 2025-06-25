<?php require_once 'cabecalho.php'; ?>
<section class="primeira">
	<h1>Área do Triângulo</h1>
<?php
	$base=$_GET['base'];
	$altura=$_GET['altura'];
	$area=($base*$altura)/2;
	echo "<p>Para o triângulo de base $base
	e altura $altura</p>";
	echo "<p>Área é igual a $area</p>";
?>
</section>
</body>
</html>