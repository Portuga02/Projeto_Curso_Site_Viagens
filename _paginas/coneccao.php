<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Configurações</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<script src="main.js"></script>
</head>
<body>
<?php

$conn ="mysql:dbname=cadastros;host=localhost";
$user="root";
$pass="";  
try{
	$pdo = new PDO ($conn, $user, $pass);
	echo'Conexão estabelecida com o banco de dados foi um sucesso</br>';

} catch(PDOException $erro){
	echo'Conexão não estabelecida com o banco de dados'.$erro->getMessage();

}


?>

</body>
</html>