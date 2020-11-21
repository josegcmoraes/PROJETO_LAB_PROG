<?php 
	session_start();
	require 'conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles-cadastro.css">
	<title>Serviços Solicitados</title>
</head>
<body>
	<section><div class="login-box">
	<img class="logo" src="images/vibe.png" alt="logotipo da loja" >
		<div class="login-box">
		<div class="login-box1">
		<input type="button" value="Voltar para pagina Principal" onclick="javascript: location.href='index.php';" />
		<input type="button" value="Realizar um novo pedido" onclick="javascript: location.href='servicos_Agenda.php';" />
		
			<div <h1> 
			    <?php echo "______________________";
			    ?><br /><?php 
			    	$usuario = dbBuscaCliente($_SESSION['NomeUsuario']);
					$linha_usuario = mysqli_fetch_array($usuario);
				?><?php echo "     USUARIO"; 
				?><br /><?php //echo  "ID:".$linha_usuario['ID']; 
				?><?php echo  "Nome:".$linha_usuario['Nome']; 
				?><br /><?php echo  "Email: ".$linha_usuario['Email']; 
				?><br /><?php echo "______________________";
			    ?>
		 		</h1>
			<div
			</div>
			
				<h1> Serviços solicitados </h1>
			</div>

		</div>
		
		<?php
				
		
		?>


		
		


		<?php
			$orcamento_servicos = dbBuscaOrcamentoPedidos($_SESSION['NomeUsuario']);
			while ($linha = mysqli_fetch_array($orcamento_servicos)) {
				$arrayServicos[] = $linha;
				$txtNomeServico = $linha['nomeServico'];
				$txtStatus = $linha['status'];
				$txtdataSolicitada = $linha['dataSolicitada'];
				$txtStatusvalor="";
				if($txtStatus==0){
					$txtStatusvalor="solicitado";
				}else{
					if($txtStatus==1){
						$txtStatusvalor="em andamento";
					}else{
						if($txtStatus==2){
							$txtStatusvalor="pronto";
						}else{
							if($txtStatus==3){
								$txtStatusvalor="entregue";
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
					echo "Serviço: ".$txtNomeServico;
					?><br /><?php
					echo "Preço: ".$txtValorServico; 
					?><br /><?php
					echo "Previsão de entrega: ".$txtTempoServico ." dias úteis após " . $txtdataSolicitada; 
					?><br /><?php
					echo "Descrição: ".$txtDescricao; 
					?><br /><?php 
					echo  "Status: ".$txtStatusvalor; 
					?><br /><?php
					echo "-----------------";
					?><br /><?php
			}


			?>

		
		</div>
	</div></section>

</html>