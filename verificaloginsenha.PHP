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
            if (isset($_COOKIE["login_error"])) {
                echo '<p class="error-message">' . $_COOKIE["login_error"] . '</p>';
                setcookie("login_error", "", time() - 3600, "/"); // Expira o cookie imediatamente
            }
            ?>
        </div>
    </div>
</body>
</html>


<?php
// Estabelecer a conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "gif_refrigeracoes";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}

// Obter as informações do formulário
$email = $_POST["email"];
$senhaFormulario = $_POST["senha"];

     echo"<hr><br>Dados do formulario ";
     echo"<br>$email";
     echo"<br>$senhaFormulario <hr> ";

// Consulta para obter os dados do usuário correspondente ao e-mail fornecido
$sql = "SELECT * FROM administrador WHERE email = :email";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":email", $email);
$stmt->execute();



$hash = password_hash($senhaFormulario, PASSWORD_DEFAULT);
 echo"<br><br> <font color=red> $hash </font>";

// Verificar se a consulta retornou resultados
if ($stmt->rowCount() > 0) 
{
    // Usuário encontrado, comparar a senha do banco de dados com a senha fornecida no formulário
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    password_hash($senhaFormulario, PASSWORD_BCRYPT);

    $hashedPassword = $row["senha"];
    $usuariobd = $row["usuario"];
    echo"<br>$hashedPassword ";
    echo"<br>$usuariobd ";

    // Comparar a senha usando a função password_verify()
    if (password_verify($hashedPassword, $hash)) 
    {
        // Senha válida, fazer o que for necessário
        if (password_verify($hashedPassword, $hash)) 
        {

        echo "<br>Login bem-sucedido!";
        header("Location: servicosadm.PHP"); 
        
        }
    } else {
        // Senha inválida
        header("Location: login.php?error=true");
        setcookie("login_error", "Erro ao fazer login. Por favor, verifique suas credenciais.", time() + 60, "/");
    }
} else {
    // Usuário não encontrado
    header("Location: login.php?error=true");
     setcookie("login_error", "Erro ao fazer login. Por favor, verifique suas credenciais.", time() + 60, "/");
    exit();
}

// Fechar a conexão com o banco de dados
$conn = null;
?>
