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
    $query = "DELETE FROM catalogo_servico WHERE id_servico = $id_servico";

    if ($conn->query($query) === TRUE) {
        echo "Serviço excluído com sucesso!";
    } else {
        echo "Erro ao excluir o serviço: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID do serviço não fornecido.";
}
header("Location: servicosadm.PHP");
?>
