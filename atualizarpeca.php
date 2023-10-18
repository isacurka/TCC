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
    $id_peca = $_POST['id_peca'];
    $nome_peca = $_POST['nome_peca'];
    $discri_peca = $_POST['discri_peca'];
    $valor_peca = $_POST['valor_peca'];

    // Consulta SQL para atualizar as informações do produto
    $query = "UPDATE catalogo_pecas SET nome_peca='$nome_peca',discri_peca='$discri_peca',valor_peca='$valor_peca' WHERE id_peca = $id_peca";

    if ($conn->query($query) === TRUE) {
        echo "Peça atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar a peça: " . $conn->error;
    }

    $conn->close();
} else {
    echo "O formulário não foi enviado.";
}
header("Location: pecasadm.PHP");
?>