<html>
<head>
	<title>Bem vindo(a)</title>
</head>

<body>
<?php
	
	
	

	// método para executar as operações do banco de dados
	function dbExecutar($query){
		$link=dbConectar();
		$resultado = $link->query($query);
		if ($resultado != TRUE) {
    		echo "Error: <br>" . $link->error;
		}
		dbFechar($link);
		return $resultado;
	}
		
	//abrir conexão com mysql
	function dbConectar(){
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "vibe_store";

		$conexao=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

		if ($conexao->connect_error) {
			echo "Connection Error";
    		die("Connection failed: " . $conexao->connect_error);
		} 
		//echo "[[ Connection Success ]]\n ";

		return $conexao;
	}
	
	//fecha conexão com mysql
	function dbFechar($conexao){
		mysqli_close($conexao);
	}
	
	
	
	function dbInsertAtendimento($Nome, $Email, $Comentario) {
		$sql = "INSERT INTO atendimento (Nome, Email,Comentario) VALUES ('$Nome', '$Email', '$Comentario');";
		$resultado=dbExecutar($sql);
		return $resultado;
	}
	
	function dbInsertCliente($Nome, $Login, $Senha, $Nascimento, $Email, $Telefone, $Cidade, $Endereco, $Cep) {
		$sql = "INSERT INTO usuarios (Nome, Login, PASSWORD, Nascimento, Email, Telefone, Cidade, Endereco, Cep) VALUES ('$Nome', '$Login', '$Senha', '$Nascimento', '$Email', '$Telefone', '$Cidade', '$Endereco', '$Cep');";
		$resultado=dbExecutar($sql);
		return $resultado;
	}

	function dbInsertFornecedor($Nome, $Login, $Senha, $Email, $Telefone, $Cidade, $Endereco, $Cep) {
		$sql = "INSERT INTO fornecedor (Nome, Login, PASSWORD, Email, Telefone, Cidade, Endereco, Cep) VALUES ('$Nome', '$Login', '$Senha', '$Email', '$Telefone', '$Cidade', '$Endereco', '$Cep');";
		$resultado=dbExecutar($sql);
		return $resultado;
	}
	
	function dbInsertFuncionario($Nome, $Login, $Senha, $Cargo, $Salario, $Admissao, $Nascimento, $Email, $Telefone, $Cidade, $Endereco, $Cep) {
		$sql = "INSERT INTO funcionario (Nome, Login, PASSWORD, Cargo, Salario, Admissao, Nascimento, Email, Telefone, Cidade, Endereco, Cep) VALUES ('$Nome', '$Login', '$Senha', '$Cargo', '$Salario', '$Admissao', '$Nascimento', '$Email', '$Telefone', '$Cidade', '$Endereco', '$Cep');";
		$resultado=dbExecutar($sql);
		return $resultado;
	}
	
	
	function dbInsertEmpresaTerceirizada($Nome_Empresa, $Login, $Senha, $Email, $Telefone, $Cidade, $Endereco, $Cep){
	    $sql = "INSERT INTO empresaterceirizada (Nome_Empresa, Login, PASSWORD, Email, Telefone, Cidade, Endereco, Cep) VALUES ('$Nome_Empresa', '$Login', '$Senha', '$Email', '$Telefone', '$Cidade', '$Endereco', '$Cep');";
		$resultado=dbExecutar($sql);
		return $resultado;
	}

	function dbInsertSolicitarOrcamento($Login, $nomeServico, $dataSolicitada, $status) {
		$sql = "INSERT INTO orcamentos (login, nomeServico, dataSolicitada, status) VALUES ('$Login', '$nomeServico','$dataSolicitada', '$status');";
		$resultado=dbExecutar($sql);
		return $resultado;
	}
	
	
	
	function dbLogin($Login, $Senha) {
		$sql_cliente = "SELECT * from usuarios WHERE Login='$Login'";
		$sql_fornecedor = "SELECT * from fornecedor WHERE Login='$Login'";
		$sql_funcionario = "SELECT * from funcionario WHERE Login='$Login'";
		$sql_empresaterceirizada = "SELECT * from empresaterceirizada WHERE Login='$Login'";

		$busca_cliente=dbExecutar($sql_cliente);
		$busca_fornecedor=dbExecutar($sql_fornecedor);
		$busca_funcionario=dbExecutar($sql_funcionario);
		$busca_empresaterceirizada=dbExecutar($sql_empresaterceirizada);

			if(mysqli_num_rows($busca_cliente) == 0 && mysqli_num_rows($busca_fornecedor) == 0 && mysqli_num_rows($busca_funcionario) == 0 && mysqli_num_rows($busca_empresaterceirizada) == 0) {	
				return 0; // conta nao existe
			}else if (mysqli_num_rows($busca_cliente) == 1) { 							
				$result_cliente = mysqli_fetch_array($busca_cliente);
					if($Senha != $result_cliente["PASSWORD"]) {
						return 0; // senha cliente errada
					}else {
						return 1; // login cliente
					}
			}else if (mysqli_num_rows($busca_fornecedor) == 1) {
				$result_fornenedor = mysqli_fetch_array($busca_fornecedor);
					if($Senha != $result_fornenedor["PASSWORD"]) {
						return 0; // senha fornecedor errada
					}else {
						return 2; // login fornecedor
					}
			}else if (mysqli_num_rows($busca_funcionario) == 1) {
				$result_funcionario = mysqli_fetch_array($busca_funcionario);
					if($Senha != $result_funcionario["PASSWORD"]) {
						return 0; // senha funcionario errado
					}else {
						return 3; // login funcionario
					}

			}else if (mysqli_num_rows($busca_empresaterceirizada) == 1) {
				$result_empresaterceirizada = mysqli_fetch_array($busca_empresaterceirizada);
					if($Senha != $result_empresaterceirizada["PASSWORD"]) {
						return 0; // senha empresa tercerizada errada
					}else {
						return 4; // login empresa tercerizada
					}

			}
	}

	
	function dbInsertProduto ($nome, $preco, $imagem, $descricao) {
		$sql = "INSERT into produtos (nome, preco, imagem, descricao) VALUES ('$nome', '$preco','$imagem', '$descricao')";
		$resultado = dbExecutar($sql);
		return $resultado;
	}

	function dbInsertServico ($nome, $tempo, $preco, $descricao) {
		$sql = "INSERT into servicos (nome, tempo, preco, descricao) VALUES ('$nome', '$tempo','$preco', '$descricao')";
		$resultado = dbExecutar($sql);
		return $resultado;
	}
	function dbInsertContas($nomeConta, $valorConta, $dataConta, $descricaoConta, $tipoConta){
		$sql = "INSERT into contas (nome, valor, data, descricao, tipo) VALUES ('$nomeConta', '$valorConta','$dataConta', '$descricaoConta', '$tipoConta')";
		$resultado = dbExecutar($sql);
		return $resultado;
	}


	function dbBuscaCatalogo() {
		$sql = "SELECT * from produtos";
		$resultado = dbExecutar($sql);
		return $resultado;
		
		
		
	}
	function dbBuscaServicos() {
		$sql = "SELECT * from servicos";
		$resultado = dbExecutar($sql);
		return $resultado;
		
		
		
	}

	function dbAlteraStatusOrcamento($IdOrcamento, $status) {
		$sql = "UPDATE orcamentos SET status = '$status' WHERE id = '$IdOrcamento'";
		$resultado = dbExecutar($sql);
		return $resultado;	
	}

	function dbBuscaCliente($cliente) {
		$sql = "SELECT ID,Nome,Email from usuarios WHERE Nome = '$cliente'";
		$resultado = dbExecutar($sql);
		return $resultado;	
	}
	function dbBuscaFuncionario($func) {
		$sql = "SELECT id, Nome,Email from funcionario WHERE Login = '$func'";
		$resultado = dbExecutar($sql);
		return $resultado;	
	}

	function  dbBuscaOrcamentoPedidos($cliente) {
		$sql = "SELECT id,login,nomeServico,status,dataSolicitada from orcamentos WHERE login = '$cliente'";
		$resultado = dbExecutar($sql);
		return $resultado;	
	}

	function  dbBuscaTodosOrcamentos() {
		$sql = "SELECT * from orcamentos";
		$resultado = dbExecutar($sql);
		return $resultado;	
	}
	function  dbBuscaServicosPedidos($nome_servico) {
		$sql = "SELECT * from servicos WHERE nome = '$nome_servico'";
		$resultado = dbExecutar($sql);
		return $resultado;	
	}
	function  dbBuscaContaPagar() {
		$sql1 = "SELECT * from contas WHERE tipo = '1'  ";
		$resultado = dbExecutar($sql1);
		return $resultado;	
	}

	function  dbBuscaContaReceber() {	
		$sql = "SELECT * from contas WHERE tipo = '2' ";
		$resultado = dbExecutar($sql);
		return $resultado;	
	}
	function dbInsereFeedback($nome, $status, $comentario) {
		$sql = "INSERT into feedback (nome, nota, comentario) VALUES ('$nome', '$status','$comentario')";
		$resultado = dbExecutar($sql);
		return $resultado;
	}

	function dbBuscaFeedbacks() {
		$sql = "SELECT * from feedback";
		$resultado = dbExecutar($sql);
		return $resultado;
	}




?>



</body>
</html>