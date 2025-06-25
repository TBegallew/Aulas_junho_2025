<?php require_once 'cabecalho.php'; ?>
<form action="idade2.php" method="GET">
	<h1>Cálculo da idade</h1>
	<p>Digite o ano de nascimento:</p>
	<p><input type="number" name="data" min="<?php $data=new DateTime(date('Y')); $data=date_modify($data, '-120 years'); echo $data->format('Y'); ?>" size="4" maxlength="4" max="<?= date('Y')?>" required></p>
	<p><input type="submit" name="botao" value="calcule"></p>
</form>
</body>
</html>
