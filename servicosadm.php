<!DOCTYPE html>
<html>
<head>
  <title>GIF Refrigerações: Serviços</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
   body {
      background-color: #C0C0C0;
      margin: 0;
      padding: 0;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    
    header {
      background-color: #87CEEB; 
      padding: 0px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0px;
    }

    .logo img {
      width: 85px;
    }

    nav ul {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav ul li {
      margin-left: 20px;
    }

    nav ul li a {
      color: black;
      text-decoration: none;
    }

    /* Rest of your CSS styles here */

    footer {
      background-color: #87CEEB;
      padding: 20px;
      border-top: 2px solid #87CEEB;
      margin-top: auto; /* This pushes the footer to the bottom */
      text-align: center;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      text-align: center;
    }

    .container p {
      margin: 0;
    }
    .cad-button {
      background-color: blueviolet; /* Verde do WhatsApp */
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 50px;
      font-size: 16px;
      cursor: pointer;
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 9999;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .formu {
      max-width: 400px;
      margin: 0 auto;
      padding: 50px;
      background-color: #daf3fc;
      border-radius: 20px;
      box-shadow: 0 0 40px rgba(0, 0, 0, 2);
      margin-top: auto; /* Isso empurra o formulário para o meio da página */
      margin-bottom: auto; /* Isso também */
      display:block;
    }
    
    h1 {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
    }
    button{
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .form-group button {
      width: 100%;
      padding: 8px;
      background-color: #87CEEB;
      color: black;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }
    
    .form-group button:hover {
      background-color: #B0E0E6;
    }
    .a {
      width: 100%;
      padding: 8px;
      background-color: #87CEEB;
      color: black;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png">
      <img src="sublogo.jpg">
    </div>
    <nav>
      <ul>
        <li><h1><a href="servicosadm.php">Serviços</a></h1></li>
        <li><h1><a href="pecasadm.php">Peças</a></h1></li>
        <div class="acesso">
          <a href="login.php"><img src="sair.png"></a>
        </div>
      </ul>
    </nav>
  </header>
  <!-- Formulário para localizar produto por ID -->
  <div class="formu">
  <form action="" method="POST">
  <div class="form-group">
    <label for="service_name">Nome do Serviço:</label>
    <input type="text" name="nome_servico" required>
    <br><br>
    <button type="submit" name="search">Localizar</button>
    </div>  
</form>

    <?php
    // Conexão com o banco de dados (substitua com suas próprias informações)
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bancodedados = 'gif_refrigeracoes';

    $conn = new mysqli($host, $usuario, $senha, $bancodedados);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['search'])) {
    $nome_servico = $_POST['nome_servico'];

    // Consulta para buscar informações do serviço pelo nome
    $query = "SELECT * FROM catalogo_servico WHERE nome_servico LIKE '%$nome_servico%'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Loop through the results to display matching services
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id_servico'] . "<br>";
            echo "Nome: " . $row['nome_servico'] . "<br>";
            echo "Descrição: " . $row['discri_servico'] . "<br>";
            echo "Valor: " . $row['valor_servico'] . "<br>";

            // Display the image associated with the service
            echo "<img src='" . $row['foto_servico'] . "' alt='Imagem do Serviço' width='300'><br><br>";

            echo "<a href='editar.php?id=" . $row['id_servico'] . "'class='a' >Editar</a> ";
            echo "<a href='excluir.php?id=" . $row['id_servico'] . "' class='a' onclick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a><br><br>";
        }
    } else {
        echo "Nenhum serviço encontrado com o nome: " . $nome_servico;
    }
}


    $conn->close();
    ?>
  </div>

<footer>
    <button class="cad-button" onclick="redirect()">Cadastrar Serviços</button>
    <div class="container">
      <p>&copy; 2023 GIF Refrigerações. Todos os direitos reservados.</p>
    </div>
  </footer>
  <script>
    function redirect() {
      window.location.href = "cadservicos.php";
    }
  </script>
</body>
</html>
