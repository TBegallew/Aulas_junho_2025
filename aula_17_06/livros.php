<?php require_once 'cabecalho.php'; ?>
<form action="livros2.php" method="GET">
	<h1>Comparação de livros</h1>
		<section class="livro">
			<div>
			<p>Autor 1:</p>
			<input type="text" name="autor" size="30" maxlength="30" pattern="[a-zA-Z\sçÇãÃéÉ]{2,120}" title="Somente letras, sem números, nem caractéres especiais, mínimo 2 máx 120" required>
			<p>Título1:</p>
			<input type="text" name="titulo" size="30" maxlength="30" pattern="[0-9a-zA-Z\sçÇãÃéÉ]{2,120}" required>
			<p>Nº de páginas:</p>
			<input type="number" name="numero" size="30" maxlength="30" min="1" required>
			<p><input type="submit" name="botao" value="Comparar"></p>
		</div>
		<div>
			<p>Autor 2:</p>
			<input type="text" name="author" size="30" maxlength="30" pattern="[a-zA-Z\sçÇãÃéÉ]{2,120}" title="Somente letras, sem números, nem caractéres especiais, mínimo 2 máx 120" required>
			<p>Título 2:</p>
			<input type="text" name="title" size="30" maxlength="30" pattern="[0-9a-zA-Z\sçÇãÃéÉ]{2,120}" required>
			<p>Nº de páginas:</p>
			<input type="number" name="number" size="30" maxlength="30" min="1" required>
			<p><input type="submit" name="botao" value="Comparar"></p>
		</div>
		</section>
</form>
</body>
</html>