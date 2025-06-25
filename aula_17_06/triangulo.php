<?php require_once 'cabecalho.php'; ?>
<form action="triangulo2.php" method="GET">
	<h1>Cálculo da área do triângulo</h1>
	<p>Digite a base:</p>
	<p><input type="number" name="base"
		min="0" step="0.01" required></p>
	<p>Digite a altura:</p>
	<p><input type="number" name="altura"
		min="0" step="0.01" required></p>
	<p><input type="submit" name="botao"
		value="Calcular"></p>
</form>
</body>
</html>