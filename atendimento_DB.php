<?php
	include_once 'conexao.php';
?><html>


<head>
	<title>Enviando os dados</title>
</head>


<body>
	
	<?php
		$Nome = $_POST["txtnome"];
		$Email = $_POST["txtemail"];
		$Comentario = $_POST["txtcomentario"];

		$result = dbInsertAtendimento($Nome, $Email, $Comentario);
		if ($result == 1) {
			header("Location: index.php");
		}
	?>

</body>


</html>