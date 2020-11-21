
<?php 
	session_start();
	//require 'conexao.php';
	require 'conexao.php';
?>
<?php
	$seleciona="";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">
	<title>Agenda de Serviços</title>
</head>
<body>

	<script>
		function valorServico($valor) {
			document.getElementById("txtValorServico").innerHTML = $valor;
		}
	</script>






	<section><div class="login-box">
	<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<div class="login-box">
		<div class="login-box1">
		<input type="button" value="Voltar para pagina Principal" onclick="javascript: location.href='index.php';" />


		<h1> Orçamento de Serviços </h1>

		</div>
		<br>
			<h3> Faça seu orçamento </h3>
			<div id="boxOrcamento" >
				
					Serviços dísponiveis: <br>
						 
				<?php
			
					$arrayServicos = array();
					$servicos = dbBuscaServicos();


					while ($linha = mysqli_fetch_array($servicos)) {
						$arrayServicos[] = $linha;

						$txtNomeServico = $linha['nome'];
						$txtValorServico = "R$   ".$linha['preco'];
						$txtTempoServico = $linha['tempo'];
						$txtDescricao = $linha['descricao'];

							?><br /><?php
							echo "-----------------";
							?><br /><?php
							echo "Serviço: ".$txtNomeServico;
							?><br /><?php
							echo "Preço: ".$txtValorServico; 
							?><br /><?php
							echo "Prazo de entrega: ".$txtTempoServico ." dias"; 
							?><br /><?php
							echo "Descrição: ".$txtDescricao; 
							?><br /><?php
							echo "-----------------";
							?><br /><?php
					}

					
			?>

			<form action="servicos_Agenda_DB.php" method="post">
				<br>
				Escolha:
				<br><br>
					<?php
						
						foreach ($arrayServicos as $value) {
							$preco = $value['preco'];
							
					?>

							<input type="radio" name="seleciona" value="<?php echo $value['nome'] ?>" onclick="valorServico( <?php echo$value['preco'] ?> )"> <?php echo$value['nome'] ?>  <br>
							
					<?php


						}
						$_SESSION['numeroServicos'] = sizeof($arrayServicos);
						$_SESSION['ArrayServicos'] = $arrayServicos;
					?>

				
				<br>
				Total: R$ <a id="txtValorServico"> </a> <br>
				<br> <br>
					<input type="submit" name="submit" value="Cadastrar" formmethod="post">
				<br> <br>
			</div>

			</form>
		
		</div>
	</div></section>
</body>
</html>