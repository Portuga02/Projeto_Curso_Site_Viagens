<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Configuração para mensagem</title>
</head>
<body>
<?php 


$conn ="mysql:dbname=mensageiros;host=localhost";
$user="root";
$pass="";  
try{
	$pdo = new PDO ($conn, $user, $pass);
	echo'Bom dia! Seus dados foram Cadastrado com sucesso! logo entraremos em contato com você. Obrigado pela preferência!!!</br>';

} catch(PDOException $erro){
	echo'Conexão não estabelecida com o banco de dados'.$erro->getMessage();

}


?>
</body>
</html>