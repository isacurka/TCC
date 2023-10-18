<!DOCTYPE html>
<html>
<head>
  <title>GIF Refrigerações: Serviços</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body{
      background-color: #C0C0C0;
      margin: 0;
      padding: 0;
    }
    footer {
      display: block;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: #87CEEB;
      color:black;
      padding: 20px;
      margin-top: 0px;
      font-size: 18px;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      text-align: center;
      
    }

    .container p {
      margin: 0;
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
      justify-content: space-between;
    }

    .carro img {
  margin-left: 5px;
  margin-top: 10px;
  width: 45px;
  justify-content: space-between;
}
.acesso img {
  width: 45px;
  justify-content: space-between;
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
    .catalogo {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 75px;
      padding: 20px;
    }

    .servico {
      border: 1px solid #ADD8E6;
      border-radius: 10px;
      background-color: #ADD8E6;
      width: 300px;
      padding: 10px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 1);
    }

    .servico img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
    }

    .servico h2 {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      margin-top: 10px;
      font-size: 18px;
    }
    .servico p {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      margin-top: 10px;
      font-size: 16px;
    }

  .servico a {
    display: block;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 50px;
    margin-top: 10px;
  }

  .botao-whatsapp {
    background-color: #25D366; /* Cor do WhatsApp */
  }
  .whatsapp-button {
        background-color: #25D366; /* Verde do WhatsApp */
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

    
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <a href="tentativa.php"><img src="logo.png"></a>
      <a href="tentativa.php"><img src="sublogo.jpg"></a>
    </div>
    <nav>
      <ul>
        <li><h1><a href="servicos.php">Serviços</a></h1></li>
        <li><h1><a href="sobrenos.php">Sobre nós</a></h1></li>
        <li><h1><a href="pecas.php">Peças</a></h1></li>
        <div class="acesso">
          <a href="login.php"><img src="perfil.png"></a>
        </div>
      </ul>
    </nav>
  </header>
  <section class="catalogo">
  <?php
// Conexão com o banco de dados (substitua com suas próprias informações)
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'gif_refrigeracoes';

$conn = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Consulta para obter os dados da tabela catalogo_servico
$sql = "SELECT * FROM catalogo_servico";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Exibição dos serviços
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="servico">';
        echo '<img src="' . $row['foto_servico'] . '">';
        echo '<h2>' . $row['nome_servico'] . '</h2>';
        echo '<p>' . $row['discri_servico'] . '</p>';
        echo '<p>Preço: R$ ' . number_format($row['valor_servico'], 2, ',', '.') . '</p>';
        echo '<a href="https://api.whatsapp.com/send?phone=5541997460677" class="botao-whatsapp">Solicitar Serviço</a>';
        echo '</div>';
    }
} else {
    echo "Nenhum serviço encontrado.";
}

mysqli_close($conn);
?>
  </section>
  <button class="whatsapp-button" onclick="window.open('https://api.whatsapp.com/send?phone=5541997460677', '_blank')">Fale Conosco pelo WhatsApp</button>
  <footer>
    <div class="container">
      <p>&copy; 2023 GIF Refrigerações. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script>
    
  </script>
</body>
</html>
