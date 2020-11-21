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




		<form action="#" method="post">
			<br><br><br>
			_____________________________________________________<br>
			PESQUISAR <br><br>
			
			
			<input type="submit" name="submit" value="VER RELATÓRIO" formmethod="post"> <br>
			_____________________________________________________
			<br><br>
		</form>

		<?php
			if (isset($_POST["submit"])) {
									$pagar = dbBuscaContaPagar();
					echo "_____________________________________________________" ?><br />
					<?php
					echo " CONTAS A PAGAR :"; ?><br />
					<?php

					$valorContasPagar=0;
					while ($linha = mysqli_fetch_array($pagar)) {
						$txtidContaPagar = $linha['id'];
						$txtnomeContaPagar = $linha['nome'];
						$txtvalorContaPagar = $linha['valor'];
						$txtdataContaPagar = $linha['data'];
						$txtdescricaoContaPagar = $linha['descricao'];
						$txttipoContaPagar = $linha['tipo'];

						$valorContasPagar=$valorContasPagar+$txtvalorContaPagar;
						
						?><br /><?php
						echo "-----------------";
						?><br /><?php
						echo "ID: " .$txtidContaPagar; 
						?><br /><?php
						echo "nome: " .$txtnomeContaPagar; 
						?><br /><?php
						echo "valor: R$ ".$txtvalorContaPagar;
						?><br /><?php
						echo "data: ".$txtdataContaPagar; 
						?><br /><?php
						echo "descrição: ".$txtdescricaoContaPagar;  
						?><br /><?php
						echo "-----------------";
						?><br /><?php
					

					}



					$receber = dbBuscaContaReceber();
					echo "_____________________________________________________" ?><br />
					<?php
					echo " CONTAS A RECEBER :"; ?><br />
					<?php

					$valorContasReceber=0;
					while ($linha1 = mysqli_fetch_array($receber)) {
						$txtidContaReceber = $linha1['id'];
						$txtnomeContaReceber = $linha1['nome'];
						$txtvalorContaReceber = $linha1['valor'];
						$txtdataContaReceber = $linha1['data'];
						$txtdescricaoContaReceber = $linha1['descricao'];
						$txttipoContaReceber = $linha1['tipo'];

						$valorContasReceber=$valorContasReceber+$txtvalorContaReceber;
						
						?><br /><?php
						echo "-----------------";
						?><br /><?php
						echo "ID: " .$txtidContaReceber; 
						?><br /><?php
						echo "nome: " .$txtnomeContaReceber; 
						?><br /><?php
						echo "valor: R$ ".$txtvalorContaReceber;
						?><br /><?php
						echo "data: ".$txtdataContaReceber; 
						?><br /><?php
						echo "descrição: ".$txtdescricaoContaReceber;  
						?><br /><?php
						echo "-----------------";
						?><br /><?php
					
				             
					}




					?><br />
					<?php
					echo "_____________________________________________________" ?><br />
					<?php
					echo " Relatório :"; ?><br /><br />
					<?php
					$saldo = $valorContasReceber - $valorContasPagar;
					echo " Contas a pagar: R$ ".$valorContasPagar; ?><br /><?php
					echo " Contas a receber: R$ ".$valorContasReceber; ?><br /><?php
					echo "Saldo: R$ ".$saldo; ?><br /><?php
					echo "_____________________________________________________" ?><br /><br /><br /><br />
					<?php

				}

			
		?>
		

			

		</div>
		
		
		</div>
		<input type="button" value="Voltar para pagina Principal" onclick="javascript: location.href='index.php';" />
	</div></section>

</html>