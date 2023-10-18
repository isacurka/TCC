<!DOCTYPE html>
<html>
<head>
	<title> Tela Grava Form Login e Senha </title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta de Login</title>
    <style>
        /* Estilo para a tela de resposta */
        .response-screen {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .response-message {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .error-message {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="response-screen">
        <div class="response-message">
            <?php
            if (isset($_COOKIE["cadastro_error"])) {
                echo '<p class="error-message">' . $_COOKIE["cadastro_error"] . '</p>';
                setcookie("cadastro_error", "", time() - 3600, "/"); // Expira o cookie imediatamente
            }
            ?>
        </div>
    </div>
</body>
</html>
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
    $sqlInserir = "INSERT INTO catalogo_servico (nome_servico, discri_servico, valor_servico, foto_servico, id_adm) 
                  VALUES (?, ?, ?, ?, ?)";
    $stmtInserir = $conn->prepare($sqlInserir);
    $stmtInserir->bind_param("ssdsi", $nome_servico, $discri_servico, $valor_servico, $foto_servico, $id_adm);

    // Define os valores das variáveis
    $nome_servico = $_POST['nome_servico'];
    $discri_servico = $_POST['discri_servico'];
    $valor_servico = $_POST['valor_servico'];
    $foto_servico = $_POST['foto_servico'];

    // Executa a inserção
    if ($stmtInserir->execute()) {
        echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $stmtInserir->error;
    }
    // Após a inserção bem-sucedida, redirecione
    header("Location: servicosadm.php");
    exit();
} else {
    // Email do administrador não encontrado, exiba uma mensagem de aviso
   // Usuário não encontrado
   header("Location: cadservicos.php?error=true");
   setcookie("cadastro_error", "Email não encontrado.", time() + 60, "/");
}

				?>
		</body>
	</html>

