<?php
// Verifique se o ID do produto foi fornecido na URL
if (isset($_GET['id'])) {
    $id_servico = $_GET['id']; // Alterado de $id_produto para $id_servico

    // Conecte-se ao banco de dados (substitua com suas próprias informações)
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bancodedados = 'gif_refrigeracoes';

    $conn = new mysqli($host, $usuario, $senha, $bancodedados);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Consulta SQL para buscar informações do serviço pelo ID
    $query = "SELECT * FROM catalogo_servico WHERE id_servico = $id_servico";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        // Recupere os dados do serviço
        $row = $result->fetch_assoc();
        $nome_servico = $row['nome_servico'];
        $discri_servico = $row['discri_servico'];
        $valor_servico = $row['valor_servico'];

        // Exiba um formulário para editar as informações
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Editar Serviço</title>
        </head>
        <body>
            <h1>Editar Serviço</h1>
            <form action="atualizar.php" method="POST">
                <input type="hidden" name="id_servico" value="<?php echo $id_servico; ?>">
                <label for="nome_servico">Nome do serviço:</label>
                <input type="text" name="nome_servico" value="<?php echo $nome_servico; ?>" required>
                <br><br>
                <label for="discri_servico">Descrição do serviço:</label>
                <input type="text" name="discri_servico" value="<?php echo $discri_servico; ?>" required>
                <br><br>
                <label for="valor_servico">Valor:</label>
                <input type="text" name="valor_servico" value="<?php echo $valor_servico; ?>" required>
                <br><br>
                <button type="submit" name="update">Atualizar</button>
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Serviço não encontrado.";
    }

    $conn->close();
} else {
    echo "ID do serviço não fornecido.";
}
?>
