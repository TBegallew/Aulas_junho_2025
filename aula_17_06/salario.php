<?php require_once 'cabecalho.php'; ?>
<form action="salario2.php" method="POST">
	<h1>Cálculo do Salário Bruto</h1>
	<p>Digite seu nome:</p>
	<p><input type="text" name="nome" size="50" maxlength="50" required></p>
	<p>Digite a quantidade de horas trabalhadas:</p>
	<p><input type="number" name="horast" min="1" max="176" step="1" required></p>
	<p>Digite o valor da hora R$:</p>
	<p><input type="number" name="valorh" min="1" step="0.01" required></p>
	<p><input type="submit" name="botao" value="calcule"></p>
</form>
</body>
</html>