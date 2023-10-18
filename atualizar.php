<?php
// Verifique se o formulário foi enviado
if (isset($_POST['update'])) {
    // Conecte-se ao banco de dados (substitua com suas próprias informações)
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bancodedados = 'gif_refrigeracoes';

    $conn = new mysqli($host, $usuario, $senha, $bancodedados);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Recupere os dados do formulário
    $id_servico = $_POST['id_servico'];
    $nome_servico = $_POST['nome_servico'];
    $discri_servico = $_POST['discri_servico'];
    $valor_servico = $_POST['valor_servico'];

    // Consulta SQL para atualizar as informações do produto
    $query = "UPDATE catalogo_servico SET nome_servico='$nome_servico',discri_servico='$discri_servico',valor_servico='$valor_servico' WHERE id_servico = $id_servico";

    if ($conn->query($query) === TRUE) {
        echo "servico atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o servico: " . $conn->error;
    }

    $conn->close();
} else {
    echo "O formulário não foi enviado.";
}
header("Location: servicosadm.PHP");
?>
