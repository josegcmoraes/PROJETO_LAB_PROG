<?php 
	session_start();
	//require 'conexao.php';
	require 'conexao.php';
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title> Principal </title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="configurarTamanho.css">
	</head>

	<nav class="menuSuperior">
		<ul>
			<a id="loginCadastro" href="login.php"> Login/Cadastro </a>
			<img id="logo" src="images/vibe.png"/>
		
			<li> <a href="atendimento.php"> Fale conosco </a>  </li>
			<li> <a href="sobre.php"> Quem somos </a>  </li>
			<li> <a href="feedback.php"> Feedback </a>  </li>
			
			 <?php
				if (!empty($_SESSION['NomeUsuario'])){
					if($_SESSION['nivelAutenticacao'] == 3){
						echo "<li> <a href='servicosFunc.php'> Servicos</a> </li>"; 
						if($_SESSION['nivelAutenticacao'] == 3 ){
							echo  "<li> <a href='controleFinanceiro.php'>Controle Financeiro</a> </li>";
						}
					}else{
						if($_SESSION['nivelAutenticacao'] == 1){
							echo "<li> <a href='servicosCliente.php'> Serviços</a> </li>";
						}else if($_SESSION['nivelAutenticacao'] == 4){
							echo "<li> <a href='cadastroServico.php'> Cadastro de Serviços</a> </li>";
						}
					} 
				}
			?>  
			
			<?php
				if (!empty($_SESSION['NomeUsuario'])){
					if($_SESSION['nivelAutenticacao'] == 3 || $_SESSION['nivelAutenticacao'] == 2){
						echo "<li> <a href='cadastrarProduto.php'> Cadastro de Produtos </a> </li>";
					}else{
						//echo "<a Serviços fornecedor não tem serviço</a>";
					} 
				}
			?>	
	
		</ul>

		<div class="logado">
			<?php
				if (isset($_SESSION['NomeUsuario'])) {
					if ($_SESSION['nivelAutenticacao'] == 1) {
						echo "[Cliente]: Bem vindo " . $_SESSION['NomeUsuario'];
					}else if ($_SESSION['nivelAutenticacao'] == 2) {
						echo "[Fornecedor]: Bem vindo " . $_SESSION['NomeUsuario'];
					}else if ($_SESSION['nivelAutenticacao'] == 3) {
						echo "[Funcionario]: Bem vindo " . $_SESSION['NomeUsuario'];
					}else if ($_SESSION['nivelAutenticacao'] == 4) {
						echo "[Empresa]: Bem vindo " . $_SESSION['NomeUsuario'];
					}
				}
			?>
		</div>
	</nav>

	<body>
		<?php	
			$catalogo = dbBuscaCatalogo();
			$conn = dbConectar();
			$catalogo = mysqli_query($conn, "SELECT * from produtos");
			while ($linha = mysqli_fetch_array($catalogo)) {
				//$image = "./imagens/".$linha['imagem'];
				$image = "./imagens/".$linha['imagem'];
				$valorProduto = "R$   ".$linha['preco'];
				$tituloNome = "".$linha['nome'];
				$descricao = "".$linha['descricao'];
				//echo $image;
				echo "
						<div class=produto>
							<h1> $tituloNome </h1>
						
							
						<div class=tamanho>
							<img src=$image>
						</div>
					
							<p> $descricao </p>
						
						

							<p class=textoValor>  $valorProduto </p>
						</div>
					";
				
				//echo "<id=tamanho img src=$image >"; 
				
				//echo "<img src=$image height="150" width="150>";
				//$testeimagem=.$linha['figura'];
				//echo '<img src='./imagens/'.$testeimagem'". height="150" width="150">';
				
				//echo '<img src="data:image/jpg;base64,'.base64_encode($linha['imagem']).' width="250" height="250" >';
				//echo '<img src="images/'.$image.'" height="150" width="150" >';
			}
			//dbFechar
		?>		
	</body>
</html>