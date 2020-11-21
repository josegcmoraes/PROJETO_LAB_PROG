<?php 
	session_start();
	require 'conexao.php';
?>


<!DOCTYPE html>
<html>


<head>
	
	<title>Atendimento page</title>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">
	<script language="javascript" type="text/javascript">

	function validar() {
		var status = cadastroFeedback.status.value;
		var comentario = cadastroFeedback.txtcomentario.value;

		if (comentario == "") {
			alert('Preencha o campo comentario');
			document.getElementById("rscomentario").style.color = "red";
			document.getElementById("rscomentario").innerHTML = "**";
			return false;
		}
		if (status == "") {
			alert('Escolha um tipo de Conta');
			document.getElementById("rstipoConta").style.color = "red";//Alteramos a cor do Span para Vermelho
			document.getElementById("rstipoConta").innerHTML = "**";//Alteramos o valor do Span para *
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
		<h1> Deixe seu FeedBack: </h1>
		</div>					
			<form name="cadastroFeedback" action="#" method="post">
				
				Diga o quão satisfeito está com a empresa : <br>
					<input type="radio" name="status" value="1" > (1) Péssimo  <br>
					<input type="radio" name="status" value="2" > (2) Ruim  <br>
					<input type="radio" name="status" value="3" > (3) Regular  <br>
					<input type="radio" name="status" value="4" > (4) Bom  <br>
					<input type="radio" name="status" value="5" > (5) Excelente  <br>
					<br>
				

				<p>Comentário:  <span id="rscomentario">&nbsp;</span></p>
					<textarea id="txtcomentario" name="txtcomentario" rows="5" cols="40" minlength="10" maxlength="500" placeholder="Digite o seu comentário" autofocus></textarea></br>
					<input type="submit" name="submit" value="Enviar" formmethod="post" onclick="return validar()">
					<br><br>
					

			</form>	
			<?php

				if (isset($_POST["submit"])) {
					$nome = $_SESSION['NomeUsuario'];
					$status = $_POST["status"];
					$comentario = $_POST["txtcomentario"];

					dbInsereFeedback($nome, $status, $comentario);
					header("Location: feedback.php");
				}
			?>	
		</div>
	</div></section>
</body>


</html>