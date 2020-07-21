<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>conneccaoMensagem</title>
</head>
<body>
	<?php
	require 'configMensagens.php';
	?>
	<?php  

	$nome = addslashes($_POST["nome"]); 
	$email = addslashes($_POST["email"]);
	$telemovel = addslashes($_POST["telemovel"]);
	$texto = addslashes($_POST["texto"]);

	if (isset($_POST["nome"]) && empty($_POST["nome"]) == false ) {
		$sql ="INSERT INTO mensagens SET nome='$nome',email='$email',telefone='$telemovel',mensagem='$texto'"; 
		$sql = $pdo->query($sql);
	}
	?>
</body>
</html>