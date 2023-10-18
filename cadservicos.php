<!DOCTYPE html>
<html>
<head>
  <title>Tela de Cadastro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #778899;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 45px;
      background-color: #daf3fc;
      box-shadow: 0 0 40px rgba(0, 0, 0, 2);
      border-radius: 20px;
      margin-top: 10px;
      margin-bottom: 10px;
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
    
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #87CEEB;
      color: black;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }
    
    .form-group button:hover {
      background-color: #B0E0E6;
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
.acesso img {
  width: 45px;
  justify-content: space-between;
  margin-left: 25px;
  margin-right: 10px;
  margin-top: 10px;
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
    footer {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: #87CEEB;
      color:black;
      padding: 20px;
      margin-top: 0px;
      font-size: 18px;
      text-align: center;
    }
  </style>
    <script>
        function redirectToHome() {
        window.location.href = "servicosadm.php";
        }
        const urlParams = new URLSearchParams(window.location.search);
    const errorParam = urlParams.get('error');

    // Se o parâmetro de erro estiver presente, mostrar o popup
    if (errorParam === 'true') {
        const popup = document.getElementById('error');
        popup.style.display = 'block';
    }
    </script>
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
  <div class="container">
    <h1>Tela de Cadastro</h1>
    <form action="telagravacadservicos.php" method="POST">
      <div class="form-group">
        <label for="name">Nome do Serviço:</label>
        <input type="text" id="name" name="nome_servico" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="discri">Discrição do Serviço:</label>
        <input type="text" id="discri" name="discri_servico" placeholder="Digite a discrição" required>
      </div>
      <div class="form-group">
        <label for="email">Valor do Serviço:</label>
        <input type="valor" id="valor" name="valor_servico" placeholder="Digite o valor" required>
      </div>
      <div class="form-group">
        <label for="password">Foto do Serviço:</label>
        <input type="file" id="foto" name="foto_servico" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="email">Confirmação email adm:</label>
        <input type="valor" id="valor" name="email_adm" placeholder="Digite o email" required>
      </div>
      <div id="error" style="display: none;">
         <p>Email não encontrado.</p>
     </div>
    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
      <div class="form-group">
        <button type="submit" mer>Cadastrar</button>
      </div>
      <div class="form-group">
        <button type="button" onclick="redirectToHome()">Voltar</button>
      </div>
    </form>
  </div>
  <footer>
    <div class="footer">
      <p>&copy; 2023 GIF Refrigerações. Todos os direitos reservados.</p>
    </div>
  </footer>

</body>
</html>