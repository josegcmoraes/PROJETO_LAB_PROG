<html>

<head>
	
	<title>Cadastro-Fornecedor page</title>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">

	<script language="javascript" type="text/javascript">
		function somenteNumerosInteiros(num) {
	        var a1 = /[^0-9]/;
	        var campo = num;
	        if (a1.test(campo.value)) {
	          campo.value = "";
	        }
	    }
		function somenteLetras(letra) {
	        var a1 = /[^a-zA-Z çÇáÁàÀéÉíÍóÓúÚâÂêÊôÔãÃüÜ&]/;
	        var campo = letra;
	        if (a1.test(campo.value)) {
	          campo.value = "";
	        }
	    }
		

		function validar() {
			var usuario = cadastro_fornecedor.txtusuario.value;
			var senha = cadastro_fornecedor.txtsenha.value;
			var nome_empresa = cadastro_fornecedor.txtnome_empresa.value;
			var email = cadastro_fornecedor.txtemail.value;
			var telefone = cadastro_fornecedor.txttelefone.value;
			var cidade = cadastro_fornecedor.txtcidade.value;
			var endereco = cadastro_fornecedor.txtendereco.value;
			var cep = cadastro_fornecedor.txtcep.value;

			if (usuario == "") {
				alert('Preencha o campo usuario');
				//cadastroAtendimento.nome.focus();
				//preventDefault();
				document.getElementById("rsusuario").style.color = "red";//Alteramos a cor do Span para Vermelho
				document.getElementById("rsusuario").innerHTML = "**";//Alteramos o valor do Span para *
				return false;
			}else{
				document.getElementById("rsusuario").innerHTML = "";
				if (senha == "") {
					alert('Preencha o campo senha');
					//cadastroAtendimento.nome.focus();
					//preventDefault();
					document.getElementById("rssenha").style.color = "red";//Alteramos a cor do Span para Vermelho
					document.getElementById("rssenha").innerHTML = "**";//Alteramos o valor do Span para *
					return false;
				}else{
					document.getElementById("rssenha").innerHTML = "";
					if (nome_empresa == "") {
						alert('Preencha o campo nome do fornecedor');
						//cadastroAtendimento.nome.focus();
						//preventDefault();
						document.getElementById("rsnome_empresa").style.color = "red";//Alteramos a cor do Span para Vermelho
						document.getElementById("rsnome_empresa").innerHTML = "**";//Alteramos o valor do Span para *
						return false;
					}else{
						document.getElementById("rsnome_empresa").innerHTML = "";
						if (email == "" || email.indexOf('@')<0 || email.indexOf('.')<0) {
							alert('Preencha o campo email');
							//cadastroAtendimento.nome.focus();
							//preventDefault();
							document.getElementById("rsemail").style.color = "red";//Alteramos a cor do Span para Vermelho
							document.getElementById("rsemail").innerHTML = "**";//Alteramos o valor do Span para *
							return false;
						}else{
							document.getElementById("rsemail").innerHTML = "";
							if (telefone == "") {
								alert('Preencha o campo telefone');
								//cadastroAtendimento.nome.focus();
								//preventDefault();
								document.getElementById("rstelefone").style.color = "red";//Alteramos a cor do Span para Vermelho
								document.getElementById("rstelefone").innerHTML = "**";//Alteramos o valor do Span para *
								return false;
							}else{
								document.getElementById("rstelefone").innerHTML = "";
								if (cidade == "") {
									alert('Preencha o campo cidade');
									//cadastroAtendimento.nome.focus();
									//preventDefault();
									document.getElementById("rscidade").style.color = "red";//Alteramos a cor do Span para Vermelho
									document.getElementById("rscidade").innerHTML = "**";//Alteramos o valor do Span para *
									return false;
								}else{
									document.getElementById("rscidade").innerHTML = "";
									if (endereco == "") {
										alert('Preencha o campo endereco');
										//cadastroAtendimento.nome.focus();
										//preventDefault();
										document.getElementById("rsendereco").style.color = "red";//Alteramos a cor do Span para Vermelho
										document.getElementById("rsendereco").innerHTML = "**";//Alteramos o valor do Span para *
										return false;
									}else{
										document.getElementById("rsendereco").innerHTML = "";
										if (cep == "") {
											alert('Preencha o campo cep');
											//cadastroAtendimento.nome.focus();
											//preventDefault();
											document.getElementById("rscep").style.color = "red";//Alteramos a cor do Span para Vermelho
											document.getElementById("rscep").innerHTML = "**";//Alteramos o valor do Span para *
											return false;
										}
									}
								}
							}
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
		<h1> Cadastro do Fornecedor </h1>
		</div>
			<form name="cadastro_fornecedor" action="cadastro_Fornecedor_DB.php" method="post" >

				<p>Usuario <span id="rsusuario">&nbsp;</span> </p>
				<input id="txtusuario" type="text" name="usuario" minlength="3" maxlength="25" placeholder="Digite o usuario" autofocus>
				
				<p>Senha <span id="rssenha">&nbsp;</span> </p>
				<input id="txtsenha" type="password" name="senha" minlength="3" maxlength="25" placeholder="Digite a senha">
				
				<p>Empresa <span id="rsnome_empresa">&nbsp;</span> </p>
				<input id="txtnome_empresa" type="text" name="nome_empresa" onkeyup="somenteLetras(this)"; minlength="3" maxlength="50" placeholder="Digite o nome do fornecedor" >

				<p>Email <span id="rsemail">&nbsp;</span> </p>
				<input id="txtemail" type="text" name="email" minlength="5" maxlength="35" placeholder="Digite o email" >

				<p>Telefone <span id="rstelefone">&nbsp;</span> </p>
				<input id="txttelefone" type="text" name="telefone" onkeyup="somenteNumerosInteiros(this)"; minlength="10" maxlength="11" placeholder="Digite o telefone" >

				<p>Cidade <span id="rscidade">&nbsp;</span> </p>
				<input id="txtcidade" type="text" name="cidade" onkeyup="somenteLetras(this)"; minlength="3" maxlength="30" placeholder="Digite a cidade" >

				<p>Endereco <span id="rsendereco">&nbsp;</span> </p>
				<input id="txtendereco" type="text" name="endereco" minlength="5" maxlength="100" placeholder="Digite o endereco" >

				<p>CEP <span id="rscep">&nbsp;</span> </p>
				<input id="txtcep" type="text" name="cep" onkeyup="somenteNumerosInteiros(this)"; minlength="8" maxlength="8" placeholder="Digite o cep sem traço" >
				
				<input id="submit" type="submit" name="submit" value="Cadastrar" formmethod="post" onclick="return validar()">
				</br></br>


			</form>		
		</div>
	</div></section>

</body>


</html>