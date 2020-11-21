<?php
	include_once 'conexao.php';
?>

<head>
	<title>Cadastrando Serviço...</title>
</head>



<?php
	$NomeServico= $_POST["txtnomeServico"];
	$precoServico= $_POST["txtprecoServico"];
	$tempoServico= $_POST["txttempoServico"];
	$descricaoServico= $_POST["txtdescricaoServico"];
	

	$result = dbInsertServico ($NomeServico, $tempoServico, $precoServico, $descricaoServico);
		if ($result == 1) {
				header("Location: index.php");
		}
	
	
	//move_uploaded_file($temp,$imagem);
	//move_uploaded_file($temp,"./imagens/".$imagem);
	header("Location: index.php");
?>