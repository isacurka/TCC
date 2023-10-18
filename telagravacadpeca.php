<!DOCTYPE html>
<html>
<head>
	<title> Tela Grava Form Login e Senha </title>
</head>
		<?php
			$servidor= 'localhost'; // nome do servidor = localhost
			$usuario = 'root'; //nome do usuário de acesso ao banco
			$senha = ''; //senha do usuário: em branco e sem espaço
			$bd = "gif_refrigeracoes"; //nome do banco de dados que será aberto
			$conn = mysqli_connect($servidor,$usuario,$senha, $bd);

				// Check connection
			// Check connection
			if (!($conn)) {
				die("Connection failed: " . mysqli_connect_error());
		  }
		   
		  echo "Connected successfully";

		  $email_adm = $_POST['email_adm'];
// Consulta para obter o ID do administrador pelo email
	$sql = "SELECT id FROM administrador WHERE email = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $email_adm);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$id_adm = $row['id'];

		// Query SQL para inserir dados na tabela catalogo_servico
		$sqlInserir = "INSERT INTO catalogo_pecas (nome_peca, discri_peca, valor_peca, foto_peca, id_adm) 
					VALUES (?, ?, ?, ?, ?)";
		$stmtInserir = $conn->prepare($sqlInserir);
		$stmtInserir->bind_param("ssdsi", $nome_peca, $discri_peca, $valor_peca, $foto_peca, $id_adm);

		// Define os valores das variáveis
		$nome_peca = $_POST['nome_peca'];
		$discri_peca = $_POST['discri_peca'];
		$valor_peca= $_POST['valor_peca'];
		$foto_peca = $_POST['foto_peca'];

		// Executa a inserção
		if ($stmtInserir->execute()) {
			echo "Novo registro criado com sucesso!";
		} else {
			echo "Erro ao inserir registro: " . $stmtInserir->error;
		}

		// Fecha a conexão com o banco de dados
		$stmtInserir->close();
	} else {
		// Lide com a situação em que o email do administrador não foi encontrado, por exemplo, redirecione para uma página de erro.
	}
	header("Location: pecasadm.php"); 

/* Caso o redirecionamento não ocorra ocorre um erro e sai do programa. */
		exit;


					?>
			</body>
		</html>


