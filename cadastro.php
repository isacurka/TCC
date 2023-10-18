<!DOCTYPE html>
<html>
<head>
  <title>Tela de Cadastro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #778899;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 45px;
      background-color: #daf3fc;
      box-shadow: 0 0 40px rgba(0, 0, 0, 2);
      border-radius: 20px;
      margin-top: 0px;
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
  </style>
    <script>
        function redirectToHome() {
        window.location.href = "login.php";
        }
    </script>
</head>
<body>
  <div class="container">
    <h1>Tela de Cadastro</h1>
    <form action="telagravacad.php" method="POST">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="nome" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
      </div>
      <div class="form-group">
        <label for="password">Confirme sua senha:</label>
        <input type="password" id="password" name="comsenha" placeholder="Digite sua senha" required>
      </div>
      <div class="form-group">
        <button type="submit" mer>Cadastrar</button>
      </div>
      <div class="form-group">
        <button type="button" onclick="redirectToHome()">Voltar</button>
      </div>
    </form>
  </div>
</body>
</html>
