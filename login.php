<!DOCTYPE html>
<html>
<head>
  <title>Tela de Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #778899;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 50px;
      background-color: #daf3fc;
      border-radius: 20px;
      box-shadow: 0 0 40px rgba(0, 0, 0, 2);
      margin-top: 55px;
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
    p{
      color: red;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
  </style>
  
</head>
<body>
  <div class="container">
    <h1>Tela de Login </h1>
    <form action="verificaloginsenha.php" method="POST">
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" id="username" name="email" placeholder="Digite seu email" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
      </div>
      <div id="error" style="display: none;">
         <p>Erro ao fazer login. Por favor, verifique suas credenciais.</p>
     </div>
      <div class="form-group">
        <button type="submit">Entrar</button>
      </div>
      <div class="form-group">
        <button type="button" onclick="redirectToCadastro()">Criar conta</button>
      </div>
      <div class="form-group">
        <button type="button" onclick="redirectToHome()">Voltar</button>
      </div>
    </form>
  </div>
<script>
    function redirectToCadastro() {
      window.location.href = "cadastro.php";
    }
     function redirectToHome() {
      window.location.href = "tentativa.php";
     }
    // Verificar se a URL da página contém um parâmetro de erro (você precisa definir essa URL corretamente)
    const urlParams = new URLSearchParams(window.location.search);
    const errorParam = urlParams.get('error');

    // Se o parâmetro de erro estiver presente, mostrar o popup
    if (errorParam === 'true') {
        const popup = document.getElementById('error');
        popup.style.display = 'block';
    }
</script>
</body>
</html>

