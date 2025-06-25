<?php require_once 'cabecalho.php'; ?>
<section class="primeira">
	<h1>Cálculo</h1>
<?php
	$inicial=$_POST['inicial'];
	$final=$_POST['final'];
	$combustivel=$_POST['combustivel'];
	$dinheiro=$_POST['dinheiro'];
	$km=$final - $inicial;
	$media=$km/$combustivel;
	$gastocomb=5.89*$combustivel;
	$lucro=$dinheiro-$gastocomb;
	$lucro=number_format($lucro,2,",",".");
	echo "<p>Você percorreu $km quilômetros</p>";
	echo "<p>Média de consumo Km/litro de $media</p>";
	echo "<p>Gastou R$ $gastocomb com combustivel</p>";
	echo "<p>O lucro líquido é de R$ $lucro</p>";
?>
	<a href="taxista.php" target="janela">Mais um cálculo?</a>
</section>
</body>
</html>