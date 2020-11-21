<?php
	include_once 'conexao.php';
?>

<html>
<head>
	<title>Bem vindo(a)</title>
	<link rel="stylesheet" type="text/css" href="">
	
	
</head>

<body>
	<?php
		$Nome= $_POST["nome"];
		$Login= $_POST["usuario"];
		$Senha= $_POST["senha"];
		$Nascimento= $_POST["data_nascimento"];
		$Email= $_POST["email"];
		$Telefone= $_POST["telefone"];
		$Cidade= $_POST["cidade"];
		$Endereco= $_POST["endereco"];
		$Cep= $_POST["cep"];
		$result = dbInsertCliente($Nome, $Login, $Senha, $Nascimento, $Email, $Telefone, $Cidade, $Endereco, $Cep);
			if ($result == 1) {
				header("Location: login.php");
			}
		
	?>

	

</body>
</html>