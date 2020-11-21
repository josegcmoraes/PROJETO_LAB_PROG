<html>
<head>
	<title>Cadastro-Cliente page</title>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">

	<script language="javascript" type="text/javascript">
		function somenteNumerosInteiros(num) {
	        var a1 = /[^0-9]/;
	        var campo = num;
	        if (a1.test(campo.value)) {
	          campo.value = "";
	        }
	    }
		
		function validarData(data){
			var a1 = /[^0-9^-]/;
			var a2 = /[^0-9]/;
			var campo=data;
			if (a1.test(campo.value)) {
	          campo.value = "";
	        }

			if(campo.value.length<5){;
				if (a2.test(campo.value)) {
		          campo.value = "";
		        }
			}else{
				if(campo.value.length<8){
					var valor;
					if(campo.value.length==6){
						valor = campo.value.substring(5,6);
					}else{
						valor = campo.value.substring(5,7);
						
					}
					if (a2.test(valor)) {
		          		campo.value = "";
		        	}else{
		        		if(campo.value.length==7){
							if(valor<1||valor>12){
								campo.value = "";
							}
						}
		        	}
				}else{
					if(campo.value.length<11){
						var valor;
						if(campo.value.length==9){
							valor = campo.value.substring(8,9);
						}else{
							valor = campo.value.substring(8,10);
							
						}
						if (a2.test(valor)) {
			          		campo.value = "";
			        	}else{
			        		if(campo.value.length==10){
								if(valor<1||valor>31){
									campo.value = "";
								}else{
									valor1 = campo.value.substring(5,7);
									if(valor1==4||valor1==6||valor1==9||valor1==11){
										if(valor==31){
											campo.value="";
										}
									}else{
										if(valor1==2){
											if(valor==30 || valor==31){
												campo.value="";
											}else{
												valor2 = campo.value.substring(0,4);
												if((valor2 % 4 == 0)&& ((valor2 % 100 != 0)||(valor2%400 == 0))){
													
												}else{
													if(valor==29){
														campo.value="";
													}
												}
											}
										}
									}
								}

							}
			        	}
					}
				}
			}

			if(campo.value.length==4){
				campo.value=campo.value+"-";
			}

			if(campo.value.length==7){
				campo.value=campo.value+'-';
			}


		}

		function validar() {
			var usuario = cadastro_Cliente.txtusuario.value;
			var senha = cadastro_Cliente.txtsenha.value;
			var nome = cadastro_Cliente.txtnome.value;
			var data_nascimento = cadastro_Cliente.txtdata_nascimento.value;
			var email = cadastro_Cliente.txtemail.value;
			var telefone = cadastro_Cliente.txttelefone.value;
			var cidade = cadastro_Cliente.txtcidade.value;
			var endereco = cadastro_Cliente.txtendereco.value;
			var cep = cadastro_Cliente.txtcep.value;

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
					if (nome == "") {
						alert('Preencha o campo nome');
						//cadastroAtendimento.nome.focus();
						//preventDefault();
						document.getElementById("rsnome").style.color = "red";//Alteramos a cor do Span para Vermelho
						document.getElementById("rsnome").innerHTML = "**";//Alteramos o valor do Span para *
						return false;
					}else{
						document.getElementById("rsnome").innerHTML = "";
						if (data_nascimento == "") {
							alert('Preencha o campo data de nascimento');
							//cadastroAtendimento.nome.focus();
							//preventDefault();
							document.getElementById("rsdata_nascimento").style.color = "red";//Alteramos a cor do Span para Vermelho
							document.getElementById("rsdata_nascimento").innerHTML = "**";//Alteramos o valor do Span para *
							return false;
						}else{
							document.getElementById("rsdata_nascimento").innerHTML = "";
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
										document.getElementById("rsnome").innerHTML = "";
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
		}
	</script>
		
</head>


<body>
	

	<section><div class="login-box">
		<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<div class="login-box">
		<div class="login-box1">
		<h1> Cadastro do Cliente </h1>
		</div>
			<form name="cadastro_Cliente" action="cadastro_Cliente_DB.php" method="POST" >
				
				<p>Usuario <span id="rsusuario">&nbsp;</span> </p>
				<input id="txtusuario" type="text" name="usuario" minlength="3" maxlength="25" placeholder="Digite o usuario" autofocus>

				<p>Senha <span id="rssenha">&nbsp;</span> </p>
				<input id="txtsenha" type="password" name="senha" minlength="3" maxlength="25" placeholder="Digite a senha">
				
				
				<p>Nome <span id="rsnome">&nbsp;</span> </p>
				<input id="txtnome" type="text" name="nome" minlength="3" maxlength="50" placeholder="Digite o seu nome" >

				<p>Data de nascimento <span id="rsdata_nascimento">&nbsp;</span> </p>
				<input id="txtdata_nascimento" type="text" name="data_nascimento" onkeyup="validarData(this)"; minlength="10" maxlength="10"placeholder="ANO-MES-DIA" >

				<p>Email <span id="rsemail">&nbsp;</span> </p>
				<input id="txtemail" type="text" name="email" minlength="5" maxlength="35" placeholder="Digite o email" >

				<p>Telefone <span id="rstelefone">&nbsp;</span> </p>
				<input id="txttelefone" type="text" name="telefone" minlength="10" maxlength="11" placeholder="Digite o telefone" >

				<p>Cidade <span id="rscidade">&nbsp;</span> </p>
				<input id="txtcidade" type="text" name="cidade" minlength="3" maxlength="30" placeholder="Digite a cidade" >

				<p>Endereco <span id="rsendereco">&nbsp;</span> </p>
				<input id="txtendereco" type="text" name="endereco" minlength="5" maxlength="100" placeholder="Digite o endereco" >

				<p>CEP <span id="rscep">&nbsp;</span> </p>
				<input id="txtcep" type="text" name="cep" minlength="8" maxlength="8" placeholder="Digite o cep" >
				
				
				<input id="submit" type="submit" name="submit" value="Cadastrar" formmethod="post" onclick="return validar()">


			</form>
		</div>
	</div></section>

</body>


</html>