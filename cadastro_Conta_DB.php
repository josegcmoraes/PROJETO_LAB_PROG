<?php
	include_once 'conexao.php';
?><html>

<head>
	<title>Cadastrando Conta...</title>
</head>


<body>
	<?php
		$nomeConta=$_POST["nomeConta"];
		$valorConta=$_POST["valorConta"];
		$dataConta= $_POST["dataConta"];
		$descricaoConta= $_POST["descricaoConta"];
		$tipoConta=$_POST["status"];

		if(isset($_POST["status"]) == null){
				header("Location: cadastro_Conta.php");	
		}else{
			
			$result = dbInsertContas($nomeConta, $valorConta, $dataConta, $descricaoConta, $tipoConta);	
			if ($result == 1) {
				header("Location: controleFinanceiro.php");
			}

		}
	?>
</body>


</html>