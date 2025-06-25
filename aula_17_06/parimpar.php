<?php require_once 'cabecalho.php'; ?>
<form action="parimpar.php" method="GET">
	<h1>Par ou ímpar</h1>
	<p>Digite um número:</p>
	<p><input type="number" name="numero"
		min="0" step="1" required></p>
	<p><input type="submit" name="botao"
		value="Verificar"></p>
</form>
<?php
	if(isset($_GET['botao'])){
		$numero=$_GET['numero'];
		echo "<section class='primeira'>";
		if($numero%2==0){
			echo "<p>$numero é Par!</p>";
		}else{
			echo "<p>$numero é ímpar!</p>";
		}
		echo "</section>";
	}
?>
</body>
</html>