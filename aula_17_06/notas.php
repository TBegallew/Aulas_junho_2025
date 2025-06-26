<?php require_once 'cabecalho.php'; ?>
<form action="notas.php" method="POST">
	<h1>Cálculo da Média</h1>
		<p>Nome do aluno:</p>
			<input type="text" name="nome" size="40" maxlength="40" pattern="[a-zA-Z\sçÇãÃéÉ]{2,120}" title="Somente letras, sem números, nem caractéres especiais, mínimo 2 máx 120" required>
		<p>Digite a nota do 1&ordm; trimestre:</p>
			<input type="number" name="nota1" size="10.0" maxlength="4" step="0.1" pattern="[0-9]" title="Somente números" required>
		<p>Digite a nota do 2&ordm; trimestre:</p>
			<input type="number" name="nota2" size="10.0" maxlength="4" step="0.1" pattern="[0-9]" title="Somente números" required>
		<p>Digite a nota do 3&ordm; trimestre:</p>
			<input type="number" name="nota3" size="10.0" maxlength="4" step="0.1" pattern="[0-9]" title="Somente números" required>
			<input type="submit" name="botao" value="Calcular">
</form>
<?php
		if(isset($_POST['botao'])){
			echo "<section class='primeira'>";
		$nome=$_POST['nome'];
		$nota1=$_POST['nota1'];
		$nota2=$_POST['nota2'];
		$nota3=$_POST['nota3'];
		$soma=$nota1+$nota2+$nota3;
		$total=$soma/3.00;
		if($total>=6.0){
			echo "<p>Caro(a) $nome, sua média é $total, você está APROVADO</p>";
		}else if($total<6.0){
			echo "<p>Caro(a) $nome, sua média é $total, você está REPROVADO";
		}
		echo "</section>";
	}
?>
</body>
</html>