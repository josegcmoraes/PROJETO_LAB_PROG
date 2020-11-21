<html>
<head>
	<title>Cadastro-Cliente page</title>
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
			var nomeConta = cadastro_Conta.txtnomeConta.value;
			var valorConta = cadastro_Conta.txtvalorConta.value;
			var dataConta = cadastro_Conta.txtdataConta.value;
			var descricaoConta = cadastro_Conta.txtdescricaoConta.value;
			var status = cadastro_Conta.status.value;

			if (nomeConta == "") {
				alert('Preencha o campo nome da conta');
				//cadastroAtendimento.nome.focus();
				//preventDefault();
				document.getElementById("rsnomeConta").style.color = "red";//Alteramos a cor do Span para Vermelho
				document.getElementById("rsnomeConta").innerHTML = "**";//Alteramos o valor do Span para *
				return false;
			}else{
				document.getElementById("rsnomeConta").innerHTML = "";
				if (valorConta == "") {
					alert('Preencha o campo com o valor da conta');
					//cadastroAtendimento.nome.focus();
					//preventDefault();
					document.getElementById("rsvalorConta").style.color = "red";//Alteramos a cor do Span para Vermelho
					document.getElementById("rsvalorConta").innerHTML = "**";//Alteramos o valor do Span para *
					return false;
				}else{
					document.getElementById("rsvalorConta").innerHTML = "";
					if (dataConta == "") {
						alert('Preencha o campo data da conta');
						//cadastroAtendimento.nome.focus();
						//preventDefault();
						document.getElementById("rsdataConta").style.color = "red";//Alteramos a cor do Span para Vermelho
						document.getElementById("rsdataConta").innerHTML = "**";//Alteramos o valor do Span para *
						return false;
					}else{
						document.getElementById("rsdataConta").innerHTML = "";
						if (descricaoConta == "") {
							alert('Preencha o campo descricao da conta');
							//cadastroAtendimento.nome.focus();
							//preventDefault();
							document.getElementById("rsdescricaoConta").style.color = "red";//Alteramos a cor do Span para Vermelho
							document.getElementById("rsdescricaoConta").innerHTML = "**";//Alteramos o valor do Span para *
							return false;
						}else{
							document.getElementById("rsdescricaoConta").innerHTML = "";
							if (status == "") {
								alert('Escolha um tipo de Conta');
								//cadastroAtendimento.nome.focus();
								//preventDefault();
								document.getElementById("rstipoConta").style.color = "red";//Alteramos a cor do Span para Vermelho
								document.getElementById("rstipoConta").innerHTML = "**";//Alteramos o valor do Span para *
								return false;
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
		<h1> Inserir Conta  </h1>
		</div>
			<form name="cadastro_Conta" action="cadastro_Conta_DB.php" method="POST" >
				
				<p>Nome da Conta  <span id="rsnomeConta">&nbsp;</span> </p>
				<input id="txtnomeConta" type="text" name="nomeConta" minlength="3" maxlength="25" placeholder="Digite o nome da conta" autofocus>

				<p>Valor da Conta  <span id="rsvalorConta">&nbsp;</span></p>
	    		<input id="txtvalorConta" type="text" name="valorConta"  onkeyup="somenteNumeros(this);" placeholder="Digite o valor da Conta" >

	    		<p>Data da Conta <span id="rsdataConta">&nbsp;</span> </p>
				<input id="txtdataConta" type="text" name="dataConta" onkeyup="validarData(this)"; minlength="10" maxlength="10" placeholder="ANO-MES-DIA" >				
				<p>Descrição <span id="rsdescricaoConta">&nbsp;</span> </p>
				<input id="txtdescricaoConta" type="text" name="descricaoConta" minlength="10" maxlength="500" placeholder="Digite a descrição da conta" >
		

				<p>Tipo de Conta:  <span id="rstipoConta">&nbsp;</span></p>
	    		<input id="txtstatus1" type="radio" name="status" value="1" > Conta a pagar <br>
				<input id="txtstatus2" type="radio" name="status" value="2" > Conta a receber  <br>
				
				
				<input id="submit" type="submit" name="submit" value="Cadastrar" formmethod="post" onclick="return validar()">


			</form>
		</div>
	</div></section>

</body>


</html>