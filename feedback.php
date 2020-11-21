
<?php 
	session_start();
	require 'conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">
	<title>Feedbacks</title>
</head>
<body>



	<section><div class="login-box">
	<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<div class="login-box">
		<div class="login-box1">
		<input type="button" value="Voltar para pagina Principal" onclick="javascript: location.href='index.php';" />


		<h1> Veja a opinião de nossos clientes </h1>

		<?php
		if (!empty($_SESSION['NomeUsuario'])){
		if($_SESSION['nivelAutenticacao'] == 1){
		?>
			<input type="button" value="Deixe seu feedback" onclick="javascript: location.href='cadastroFeedback.php';" />
		<?php
		}}
		?>
		

		</div>
		<br>
			<div id="boxOrcamento" >
				
						 
				<?php

					$feedbacks = dbBuscaFeedbacks();
					$feedbacks2 = dbBuscaFeedbacks();
					$notas1 = 0;
					$notas2 = 0;
					$notas3 = 0;
					$notas4 = 0;
					$notas5 = 0;

					while ($linha = mysqli_fetch_array($feedbacks)) {
						if ($linha['nota'] == 1) {
							$notas1++;
						}elseif ($linha['nota'] == 2) {
							$notas2++;
						}elseif ($linha['nota'] == 3) {
							$notas3++;
						}elseif ($linha['nota'] == 4) {
							$notas4++;
						}elseif ($linha['nota'] == 5) {
							$notas5++;
						}
					}
					echo "____________________________________" ?><br />
					<h2>Notas obtidas:</h2><br>
					<?php

						echo " NOTA 5 (Excelente) :".$notas5; ?><br /><?php
						echo " NOTA 4 (Bom) :".$notas4; ?><br /><?php
						echo " NOTA 3 (Regular) :".$notas3; ?><br /><?php
						echo " NOTA 2 (Ruim) :".$notas2; ?><br /><?php
						echo " NOTA 1 (Péssimo) :".$notas1; ?><br /><?php

					echo "____________________________________" ?><br /><br />
					<?php
					while ($linha = mysqli_fetch_array($feedbacks2)) {

						$txtNomeCliente = $linha['nome'];
						$txtNota = $linha['nota'];
						$txtComentario = $linha['comentario'];
						

							?><br /><?php
							echo "-----------------";
							?><br /><?php
							echo "Cliente: ".$txtNomeCliente;
							?><br /><?php
							echo "Nota: ".$txtNota; 
							?><br /><?php
							echo "Comentário: ".$txtComentario; 
							?><br /><?php
							echo "-----------------";
							?><br /><?php
					}

					
			?>

			
		
		</div>
	</div></section>
</body>
</html>