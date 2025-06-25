<?php require_once 'cabecalho.php'; ?>
<section class="primeira">
	<h1>Cálculos simples</h1>
<?php
	$numero1=4;
	$numero2=2;
	echo "<p>O numero1 é $numero1</p>";
	echo "<p>O numero2 é $numero2</p>";
	$soma=$numero1+$numero2;
	echo "<p>A soma de $numero1 + $numero2 = $soma</p>";
	$subtracao=$numero1-$numero2;
	echo "<p>A subtração de $numero1 - $numero2 = $subtracao</p>";
	$produto=$numero1*$numero2;
	echo "<p>O produto de $numero1 x $numero2 = $produto</p>";
	$divisao=$numero1/$numero2;
	echo "<p>A divisão de $numero1 &divide; $numero2 = $divisao</p>";
	$potenciacao=pow($numero1, $numero2);
	echo "<p>$numero1 <sup>$numero2</sup> = $potenciacao</p>";
	$raiz=sqrt($numero1);
	echo "<p>&radic; $numero1 = $raiz</p>"; 
?>
</section>
</body>
</html>