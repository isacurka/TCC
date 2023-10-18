<?php
// Verifique se o ID do produto foi fornecido na URL
if (isset($_GET['id'])) {
    $id_peca = $_GET['id']; // Alterado de $id_produto para $id_servico

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
    $query = "SELECT * FROM catalogo_pecas WHERE id_peca = $id_peca";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        // Recupere os dados do serviço
        $row = $result->fetch_assoc();
        $nome_peca = $row['nome_peca'];
        $discri_peca = $row['discri_peca'];
        $valor_peca = $row['valor_peca'];

        // Exiba um formulário para editar as informações
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Editar Peça</title>
        </head>
        <body>
            <h1>Editar Peça</h1>
            <form action="atualizarpeca.php" method="POST">
                <input type="hidden" name="id_peca" value="<?php echo $id_peca; ?>">
                <label for="nome_peca">Nome da peça:</label>
                <input type="text" name="nome_peca" value="<?php echo $nome_peca; ?>" required>
                <br><br>
                <label for="discri_peca">Discrição da peça:</label>
                <input type="text" name="discri_peca" value="<?php echo $discri_peca; ?>" required>
                <br><br>
                <label for="valor_peca">Valor:</label>
                <input type="text" name="valor_peca" value="<?php echo $valor_peca; ?>" required>
                <br><br>
                <button type="submit" name="update">Atualizar</button>
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Peça não encontrada.";
    }

    $conn->close();
} else {
    echo "ID da peça não fornecida.";
}
?>