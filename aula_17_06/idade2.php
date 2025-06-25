<?php require_once 'cabecalho.php'; ?>
<section class="primeira">
	<h1>Idade</h1>
<?php
	$data=$_GET['data'];
	$data= 2025 - $data;
	echo "<p>Sua idade é: $data</p>";
?>
	<a href="idade.php" target="janela">Mais um cálculo?</a>
</section>
</body>
</html>
