<?php 
	session_start();
	require 'conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">
	<title>Orçamentos Solicitados</title>
</head>
<script>
	function alteraStatus($IdOrcamento, $status) {
				if ($result) {
					document.getElementById("txtStatusAlterado").innerHTML = "STATUS ALTERADO";
				}
			
		
	}
</script>



<body>
	<section><div class="login-box">
	<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<div class="login-box">
		<div class="login-box1">
		<input type="button" value="Voltar para pagina Principal" onclick="javascript: location.href='index.php';" />
		
			<div <h1> 
			    <?php echo "______________________";
			    ?><br /><?php 
			    	$usuario = dbBuscaFuncionario($_SESSION['NomeUsuario']);
					$linha_usuario = mysqli_fetch_array($usuario);
				?><?php echo "     ÁREA DO FUNCIONÁRIO"; 
				?><br /><?php //echo  "ID:".$linha_usuario['ID']; 
				?><?php echo  "Nome:".$linha_usuario['Nome']; 
				?><br /><?php echo  "Email: ".$linha_usuario['Email']; 
				?><br /><?php echo "______________________";
			    ?>
		 		</h1>
			<div
			</div>
			
				<h1> Orçamentos solicitados </h1>
			</div>

		</div>
		
		<?php
				
		
		?>


		
		


		<?php
			$orcamento_servicos = dbBuscaTodosOrcamentos();

			while ($linha = mysqli_fetch_array($orcamento_servicos)) {
				$arrayServicos[] = $linha;
				$txtIdServico = $linha['id'];
				$txtClienteSolicitante = $linha['login'];
				$txtNomeServico = $linha['nomeServico'];
				$txtStatus = $linha['status'];
				$txtStatusvalor="";
				if($txtStatus==0){
					$txtStatusvalor=" SOLICITADO";
				}else{
					if($txtStatus==1){
						$txtStatusvalor=" EM ANDAMENTO";
					}else{
						if($txtStatus==2){
							$txtStatusvalor=" PRONTO";
						}else{
							if($txtStatus==3){
								$txtStatusvalor=" ENCERRADO";
							}
						}
					}	
				}
				$dados_servicos = dbBuscaServicosPedidos($txtNomeServico);
				$linha_servico = mysqli_fetch_array($dados_servicos);

				$txtValorServico = "R$   ".$linha_servico['preco'];
				$txtTempoServico = $linha_servico['tempo'];
				$txtDescricao = $linha_servico['descricao'];

					?><br /><?php
					echo "-----------------";
					?><br /><?php
					echo "ID Orcamento: " .$txtIdServico; 
					?><br /><?php
					echo "Cliente solicitante: " .$txtClienteSolicitante; 
					?><br /><?php
					echo "Serviço: ".$txtNomeServico;
					?><br /><?php
					echo "Preço: ".$txtValorServico; 
					?><br /><?php
					echo "Prazo de Entrega: ".$txtTempoServico ." dias";  
					?><br /><?php 
					echo  "Status: ".$txtStatusvalor; 
					?><br /><?php
					echo "-----------------";
					?><br /><?php

					//dbAlteraStatusOrcamento($txtIdServico, 2);
					
				
				}
 			


			
			?>
			<br><br>
			Alteração de Status : 
			<br><br>

		<form action="#" method="post">
			ID : 
			<input type="number" name="idServico" placeholder="Digite o ID"> <br>
			<input type="radio" name="status" value="1" > Em andamento  <br>
			<input type="radio" name="status" value="2" > Pronto  <br>
			<input type="radio" name="status" value="3" > Encerrado  <br>
			<br>
			
			<input type="submit" name="submit" value="Alterar" formmethod="post">
			<br><br>
		</form>

		<?php

			if (isset($_POST["submit"])) {
					$IdAlterado = $_POST["idServico"];
					$newStatus = $_POST["status"];
					dbAlteraStatusOrcamento($IdAlterado, $newStatus);
					header("Location: controleOrcamentos.php");
			}
		?>

		
		</div>
	</div></section>

</html>