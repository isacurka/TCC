<?php
// Verifique se o ID do produto foi fornecido na URL
if (isset($_GET['id'])) {
    $id_servico = $_GET['id'];

    // Conecte-se ao banco de dados (substitua com suas próprias informações)
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bancodedados = 'gif_refrigeracoes';

    $conn = new mysqli($host, $usuario, $senha, $bancodedados);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Consulta SQL para excluir o produto pelo ID
    $query = "DELETE FROM catalogo_pecas WHERE id_peca = $id_servico";

    if ($conn->query($query) === TRUE) {
        echo "Peça excluída com sucesso!";
    } else {
        echo "Erro ao excluir a peça: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID da peça não fornecido.";
}
header("Location: pecasadm.PHP");
?>