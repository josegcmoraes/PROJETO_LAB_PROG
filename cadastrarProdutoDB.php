<?php
	include_once 'conexao.php';
?><html>

<head>
	<title>Cadastrando Produto...</title>
</head>


<body>
	<?php
		$imagem=$_FILES["txtimagemProduto"]["name"];
		$temp=$_FILES["txtimagemProduto"]["tmp_name"];
		$NomeProduto= $_POST["txtnomeProduto"];
		$PrecoProduto= $_POST["txtprecoProduto"];
		$DescricaoProduto= $_POST["txtdescricaoProduto"];
		
		move_uploaded_file($temp,"./imagens/".$imagem);
		
		var_dump($imagem);
		var_dump($temp);
		
		//insertImagem($imagem);
		$result = dbInsertProduto($NomeProduto, $PrecoProduto, $imagem, $DescricaoProduto);
		
		if ($result == 1) {
				header("Location: index.php");
		}
		//move_uploaded_file($temp,$imagem);
		//move_uploaded_file($temp,"./imagens/".$imagem);
		header("Location: index.php");
	?>	
</body>


</html>
