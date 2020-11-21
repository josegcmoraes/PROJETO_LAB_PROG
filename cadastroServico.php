
<html>
<head>
	<title>Cadastro de Serviço page</title>
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
	    function somenteNumerosInteiros(num) {
	        var a1 = /[^0-9]/;
	        var campo = num;
	        if (a1.test(campo.value)) {
	          campo.value = "";
	        }
	    }
	
		function validar() {
			var nomeServico = cadastrarServico.txtnomeServico.value;
			var preco = cadastrarServico.txtprecoServico.value;
			var tempo = cadastrarServico.txttempoServico.value;
			var descricao = cadastrarServico.txtdescricaoServico.value;

			if (nomeServico == "") {
				alert('Preencha o campo com o nome do serviço');
				//cadastroAtendimento.nome.focus();
				//preventDefault();
				document.getElementById("rsnomeServico").style.color = "red";//Alteramos a cor do Span para Vermelho
				document.getElementById("rsnomeServico").innerHTML = "**";//Alteramos o valor do Span para *
				return false;
			}else{
				document.getElementById("rsnomeServico").innerHTML = "";
				if (preco == "") {
					alert('Preencha o campo com o preço do serviço');
					//cadastroAtendimento.nome.focus();
					//preventDefault();
					document.getElementById("rsprecoServico").style.color = "red";//Alteramos a cor do Span para Vermelho
					document.getElementById("rsprecoServico").innerHTML = "**";//Alteramos o valor do Span para *
					return false;
				}else{
					document.getElementById("rsprecoServico").innerHTML = "";
					if (tempo == "") {
						alert('Preencha o campo com o prazo em dias para realizar o serviço');
						//cadastroAtendimento.nome.focus();
						//preventDefault();
						document.getElementById("rstempoServico").style.color = "red";//Alteramos a cor do Span para Vermelho
						document.getElementById("rstempoServico").innerHTML = "**";//Alteramos o valor do Span para *
						return false;
					}else{
						document.getElementById("rstempoServico").innerHTML = "";
						if (descricao == "") {
							alert('Preencha o campo com a descrição do serviço');
							//cadastroAtendimento.nome.focus();
							//preventDefault();
							document.getElementById("rsdescricaoServico").style.color = "red";//Alteramos a cor do Span para Vermelho
							document.getElementById("rsdescricaoServico").innerHTML = "**";//Alteramos o valor do Span para *
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
		<h1> Cadastro do Serviço </h1>
		</div>
			<form name="cadastrarServico" action="cadastroServicoDB.php" method="post" >
				<p>Nome do Serviço:  <span id="rsnomeServico">&nbsp;</span></p>
				<input id="txtnomeServico" type="text" name="txtnomeServico" minlength="5" maxlength="50" placeholder="Digite o nome do serviço prestado" autofocus>


				<p>Preco:  <span id="rsprecoServico">&nbsp;</span></p>
	    		<input id="txtprecoServico" type="text" name="txtprecoServico"  onkeyup="somenteNumeros(this);" placeholder="Digite o preco do Servico">

	    		<p>Tempo: (Dias)  <span id="rstempoServico">&nbsp;</span></p>
	    		<input id="txttempoServico" type="text" name="txttempoServico" onkeyup="somenteNumerosInteiros(this);" placeholder="Digite o prazo em dias para execução do Servico">

	    		<p>Descricao:  <span id="rsdescricaoServico">&nbsp;</span></p>
	    		<input id="txtdescricaoServico" type="text" name="txtdescricaoServico" minlength="10" maxlength="500" placeholder="Digite a descricao do Servico">

	    		<p></p>
	    		<input id="submit" type="submit" name="submit" value="Enviar" formmethod="post" onclick="return validar()">
			</form>	
		</div>
	</div></section>

</body>

		

</html>