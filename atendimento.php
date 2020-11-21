<!DOCTYPE html>
<html>


<head>
	
	<title>Atendimento page</title>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">
	<script language="javascript" type="text/javascript">

	function validar() {
		var nome = cadastroAtendimento.txtnome.value;
		var email = cadastroAtendimento.txtemail.value;
		var comentario = cadastroAtendimento.txtcomentario.value;
		 
		if (nome == "") {
			alert('Preencha o campo com seu nome');
			document.getElementById("rsnome").style.color = "red";
			document.getElementById("rsnome").innerHTML = "**";
			return false;
		}

		if (email == ""|| email.indexOf('@')<0 || email.indexOf('.')<0) {
			alert('Preencha o campo email');
			document.getElementById("rsemail").style.color = "red";
			document.getElementById("rsemail").innerHTML = "**";
			return false;
		}

		if (comentario == "") {
			alert('Preencha o campo comentario');
			document.getElementById("rscomentario").style.color = "red";
			document.getElementById("rscomentario").innerHTML = "**";
			return false;
		}
	}
	
	</script>
</head>


<body>	
	<section><div class="login-box">
		<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<div class="login-box">
		<div class="login-box1">
		<h1> Entre em contato conosco </h1>
		</div>					
			<form name="cadastroAtendimento" action="atendimento_DB.php" method="post">
				
				<p>Nome:  <span id="rsnome">&nbsp;</span></p>
				<input id="txtnome" type="text" name="txtnome" minlength="5" maxlength="50"  placeholder="Digite o seu nome" autofocus  >       
				
				<p>Email:  <span id="rsemail">&nbsp;</span></p>
				<input id="txtemail" type="text" name="txtemail" minlength="5" maxlength="35" placeholder="Digite o email" autofocus  >
				
				
				<p>Comentário:  <span id="rscomentario">&nbsp;</span></p>
				<textarea id="txtcomentario" name="txtcomentario" rows="5" cols="40" minlength="10" maxlength="500" placeholder="Digite o seu comentário" autofocus></textarea></br>

				<input id="submit" type="submit" name="submit" value="Enviar" formmethod="post" onclick="return validar()">		

			</form>		
		</div>
	</div></section>
</body>


</html>