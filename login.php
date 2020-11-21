<?php 
	session_start();
?>

<html>

<head>
	
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="styles-login.css">

</head>


<body>
	

	<section><div class="login-box">
		<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<h1> Login </h1>
			<form action="login_DB.php" method="post" >
				
				<p>Usuario</p>
				<input type="text" name="usuario" placeholder="Digite o login" autofocus>
				<p>Senha</p>
				<input type="password" name="senha" placeholder="Digite a senha">
				<input type="submit" name="submit" value="Entrar" formmethod="post">

				<a class="cadastro" href="cliente_fornecedor.php"> Cadastrar </a>

			</form>
		<?php
			if (isset($_SESSION['statusLogin'])) {
				echo $_SESSION['statusLogin'];
				//unset($_SESSION['statusLogin']);
			}
		?>

	</div></section>


</body>

























<html>