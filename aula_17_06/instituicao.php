<?php require_once 'cabecalho.php'; ?>
<form action="instituicao.php" method="GET">
	<h1>Instituições de ensino</h1>
	<p>Qual a instituição de ensino?</p>
	<input type="text" name="ensino" size="30" maxlength="120" pattern="[a-zA-Z\sçÇãÃéÉ]{2,120}" title="Somente letras, sem números, nem caractéres especiais, mínimo 2 máx 120" required>
	<p><input type="submit" name="botao" value="Verificar"></p>
</form>
<?php
	if(isset($_GET['botao'])){ 
		$instituicao=$_GET['ensino'];
			echo "<section class='primeira'>"; 
		if(strtolower($instituicao)=="senac"){
				echo "<p>Parabéns!Boa escolha</p>";
		}else{
				echo "<p>Que pena, poderia ser o Senac</p>";
		}
		echo "</section>";
	}
?>
</body>
</html>