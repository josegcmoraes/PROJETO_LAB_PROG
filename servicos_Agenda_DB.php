<?php
	session_start();
	include_once 'conexao.php';
?>

<html>
<head>
	<title>Bem vindo(a)</title>
	<link rel="stylesheet" type="text/css" href="">
</head>

<body>
	<?php
		
		$Login= $_SESSION['NomeUsuario'];
		$servicosAmostra = $_SESSION['numeroServicos'];
		$arrayServ = $_SESSION['ArrayServicos'];
		$nomeServico = "";
		$result = 0;
		$dataSolicitada = date('Y-m-d');

		echo $Login;
		if(isset($_POST['seleciona'])== null){
			header("Location: servicos_Agenda.php");	
		}else{
			$result = dbInsertSolicitarOrcamento($Login, $_POST['seleciona'], $dataSolicitada, 0);
				if ($result == 1) {
					header("Location: servicos_Acompanhar.php");
				}


		}
	
		



	?>
	
	
</body>
</html>