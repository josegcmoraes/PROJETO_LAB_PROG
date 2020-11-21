<?php
	session_start();

	require 'conexao.php';
	

	$login = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$nivelAutenticacao = dbLogin($login, $senha);
	
	if ($nivelAutenticacao == 0) {
		unset($_SESSION['statusLogin']);
		$_SESSION['statusLogin'] = "Conta inexistente ou incorreta !";
		header("Location: login.php");
	}else if ($nivelAutenticacao == 1) { // cliente
		unset($_SESSION['statusLogin']);
		$_SESSION['NomeUsuario'] = $login;
		$_SESSION['nivelAutenticacao'] = 1;
		header("Location: index.php");
	}else if ($nivelAutenticacao == 2) { // fornecedor
		unset($_SESSION['statusLogin']);
		$_SESSION['NomeUsuario'] = $login;
		$_SESSION['nivelAutenticacao'] = 2;
		header("Location: index.php");
	}else if ($nivelAutenticacao == 3) { // funcionario
		unset($_SESSION['statusLogin']);
		$_SESSION['NomeUsuario'] = $login;
		$_SESSION['nivelAutenticacao'] = 3;
		header("Location: index.php");
	}else if ($nivelAutenticacao == 4) { // empresa tercerizada
		unset($_SESSION['statusLogin']);
		$_SESSION['NomeUsuario'] = $login;
		$_SESSION['nivelAutenticacao'] = 4;
		header("Location: index.php");
	}


?>