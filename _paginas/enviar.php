			<!DOCTYPE html>
			<html lang="pt-br">
			<head>
				<title>conecção</title>
				<meta charset ="UTF-8"/>
				<link rel="stylesheet" type="text/css" href="../_css/config.css">
				<script type="text/javascript" src="../_JavaScript/config.js"> </script> 
				<!-- bootstrapp utilizado ness sistma : versão 3.3.7 -->  
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous">
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				crossorigin="anonymous"></script>
			</head>
			<body style="background-color: #63B8FF">
				

				<?php 
				require 'coneccao.php'; 
				?>
				<?php  

				
			//Cadastramento de usuários no banco de dados
			// Retornando o campo nome para não cadastrar dados sem a  rgumentos
			// metodos addslashes para segurança do banco de dados

				if(isset($_POST['nome']) && empty($_POST['nome']) == false) {

					$nome = addslashes($_POST["nome"]);
					$sobrenome = addslashes($_POST["sobrenome"]);
					$passaporte = addslashes($_POST["passaporte"]);
					$estado = addslashes($_POST["estado"]);
					$cep = addslashes($_POST["cep"]);
					$rua =  addslashes($_POST["rua"]);
					$cidade = addslashes( $_POST["cidade"]);
					$uf = addslashes($_POST["uf"]);
					
					$cidadania = addslashes($_POST["Dcidadania"]);

			
					$sql = "INSERT INTO cadastrados SET
					nome ='$nome',sobrenome='$sobrenome',passaporte='$passaporte',estado='$estado',cep='$cep',rua='$rua',cidade='$cidade',uf='$uf',duplanacionalidade='$cidadania'";
					$sql = $pdo->query($sql);
				}
				
			// retorno de dados para o formulãrios 
			// colocar em tabela para melhor visibilidade do usuário

				echo'Cadastramento efeutado com sucesso';
				
				?>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>

				<br/>
				<form>
				<button formaction="../index.php" class="btn btn-default" type="submit" name="button" > 
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Pagina Inicial  </button>
				</form>
				</body>
				</html>