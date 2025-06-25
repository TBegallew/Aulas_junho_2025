<?php require_once 'cabecalho.php'; ?>
<form action="macas.php" method="GET">
	<h1>Comprar maças</h1>
	<p>Digite a quantidade:</p>
	<input type="number" name="quantidade" min="1" step="1" required>
	<p><input type="submit" name="botao" value="comprar"></p>
</form>
<?php
	if(isset($_GET['botao'])){
		$numero=$_GET['quantidade'];
		echo "<section class='primeira'>";
		if($numero<12){
			$total=$numero*4.00;
			echo "<p> Sua compra deu R$ $total</p>";
		}else if($numero>=12){
			$total=$numero*3.00;
			echo "<p> Sua compra deu R$ $total</p>";
		}
		echo "</section>";
	}
?>
</body>
</html>