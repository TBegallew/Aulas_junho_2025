<?php require_once 'cabecalho.php'; ?>
<form action="taxista2.php" method="POST">
	<h1>Taxista</h1>
	<p>Digite o odômetro inicial (KM's):</p>
	<p><input type="number" name="inicial" min="0" step="1" required></p>
	<p>Digite o odômetro final (KM's):</p>
	<p><input type="number" name="final" min="0" step="1" required></p>
	<p>Quanto combustível gasto (litros):</p>
	<p><input type="number" name="combustivel" min="0" step="1" required></p>
	<p>Quanto recebeu do cliente:</p>
	<p>$<input type="number" name="dinheiro" min="0" step="1" required></p>
	<p><input type="submit" name="botao" value="calcule"></p>
</form>
</body>
</html>
