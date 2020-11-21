<html>


<head>
	<title>Cadastro de Produto page</title>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">
	<script language="javascript" type="text/javascript">	
		function somenteNumeros(num) {
	        var a1 = /[^0-9.]/;
	        a1.lastIndex = 0;
	        var campo = num;
	        if (a1.test(campo.value)) {
	          campo.value = "";
	        }
	        campo.value = parseFloat(campo.toFixed(2));
	    }
	
		function validar() {
			var nomeProduto = cadastrarProduto.txtnomeProduto.value;
			var preco = cadastrarProduto.txtprecoProduto.value;
			var imagem = cadastrarProduto.txtimagemProduto.value;
			var descricao = cadastrarProduto.txtdescricaoProduto.value;

			if (nomeProduto == "") {
				alert('Preencha o campo com o nome do produto');
				document.getElementById("rsnomeProduto").style.color = "red";
				document.getElementById("rsnomeProduto").innerHTML = "**";
				return false;
			}else{
				document.getElementById("rsnomeProduto").innerHTML = "";
				if (preco == "") {
					alert('Preencha o campo com o preço do produto');
					document.getElementById("rsprecoProduto").style.color = "red";
					document.getElementById("rsprecoProduto").innerHTML = "**";
					return false;
				}else{
					document.getElementById("rsprecoProduto").innerHTML = "";
					if (imagem == "") {
						alert('Escolha a imagem do produto');
						document.getElementById("rsimagemProduto").style.color = "red";
						document.getElementById("rsimagemProduto").innerHTML = "**";
						return false;
					}else{
						document.getElementById("rsimagemProduto").innerHTML = "";
						if (descricao == "") {
							alert('Preencha o campo com a descrição do produto');
							document.getElementById("rsdescricaoProduto").style.color = "red";
							document.getElementById("rsdescricaoProduto").innerHTML = "**";
							return false;
						}
					}
				}
			}
		}

	</script>
</head>


<body>
	<section><div class="login-box">
		<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<div class="login-box">
		<div class="login-box1">
		<h1> Cadastro do Produto </h1>
		</div>
			<form name="cadastrarProduto" action="cadastrarProdutoDB.php" method="post" enctype="multipart/form-data">

				<p>Nome do Produto:  <span id="rsnomeProduto">&nbsp;</span></p>
				<input id="txtnomeProduto" type="text" name="txtnomeProduto" minlength="5" maxlength="50" placeholder="Digite o nome do produto" autofocus>

				<p>Preco do Produto:  <span id="rsprecoProduto">&nbsp;</span></p>
	    		<input id="txtprecoProduto" type="text" name="txtprecoProduto" onkeyup="somenteNumeros(this);" placeholder="Digite o preco do produto">

	    		<p>Imagem do Produto: <span id="rsimagemProduto">&nbsp;</span> </p>
	    		<input id="txtimagemProduto" type="file" name="txtimagemProduto" accept="image/png, image/jpeg">

	    		<p>Descricao do Produto:  <span id="rsdescricaoProduto">&nbsp;</span></p>
	    		<input id="txtdescricaoProduto" type="text" name="txtdescricaoProduto" minlenght="10" maxlength="500" placeholder="Digite a descricao do produto">

	    		<p></p>
	    		
	    		<input id="submit" type="submit" name="submit" value="Enviar" formmethod="post" onclick="return validar()">

			</form>	
		</div>
	</div></section>
</body>

	
</html>