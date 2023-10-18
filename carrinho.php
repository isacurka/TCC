<!DOCTYPE html>
<html>
<head>
  <title>GIF Refrigerações: Peças</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
  background-color: #C0C0C0;
  margin: 0;
  padding: 0;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  position: relative;
}

header {
  background-color: #87CEEB; 
  padding: 0;
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

.product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

.product-card {
      border: 1px solid #ADD8E6;
      border-radius: 10px;
      background-color: #ADD8E6;
      width: 300px;
      padding: 10px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 1);
    }

.botao{
    background-color: blueviolet;
    border:none;
    color: white;
    text-align: center;
    padding: 10px 20px;
    border-radius: 50px;
     }
.botao:hover{
        cursor: pointer;
      }

footer {
  position: fixed;
  background-color: #87CEEB;
  color: black;
  padding: 20px;
  font-size: 18px;
  text-align: center;
  margin-top: 360px;
   bottom: 0;
  left: 0; 
  right: 0;
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
      <a href="tentativa.php"><img src="logo.png" alt="Logo"></a>
      <a href="tentativa.php"><img src="sublogo.jpg" alt="Sublogo"></a>
    </div>
    <nav>
      <ul>
        <li><h1><a href="servicos.php">Serviços</a></h1></li>
        <li><h1><a href="sobrenos.php">Sobre nós</a></h1></li>
        <li><h1><a href="pecas.php">Peças</a></h1></li>
        <div class="carro">
          <a href="carrinho.php"><img src="https://cdn-icons-png.flaticon.com/256/1170/1170678.png"></a>
        </div>
        <div class="acesso">
          <a href="login.php"><img src="perfil.png"></a>
        </div>
      </ul>
    </nav>
  </header>

  <div class="product-container">
    <div id="itens"> </div>  
    </div>
    <center>
     <div>Total: <span id="total"></span></div>
     <br>
    <button class="botao" type="button" onclick="localStorage.clear(); location.reload();">Limpar carrinho</button>
    </center>

  <footer>
    <div class="container">
      <p>&copy; 2023 GIF Refrigerações. Todos os direitos reservados.</p>
    </div>
  </footer>

  <!-- Botão para WhatsApp -->
  <button class="whatsapp-button" onclick="window.open('https://api.whatsapp.com/send?phone=5541997460677', '_blank')">Fale Conosco pelo WhatsApp</button>
<script>
 var total = 0; // variável que retorna o total dos produtos que estão na LocalStorage.
 var i =0;     // variável que irá percorrer as posiçõesvscode-file://vscode-app/c:/Users/heima/AppData/Local/Programs/Microsoft%20VS%20Code/resources/app/out/vs/code/electron-sandbox/workbench/workbench.html
 var valor = 0; // variável que irá receber o preço do produto convertido em Float.
 
 for(i=1; i<=99; i++) // verifica até 99 produtos registrados na localStorage
 {
	 var prod = localStorage.getItem("produto" + i + ""); // verifica se há recheio nesta posição. 
	 if(prod != null) 
	 {	
		 // exibe os dados da lista dentro da div itens
     document.getElementById("itens").innerHTML += localStorage.getItem("qtd" + i) + " x ";
		 document.getElementById("itens").innerHTML += localStorage.getItem("produto" + i);
		 document.getElementById("itens").innerHTML += " ";
		 document.getElementById("itens").innerHTML += "R$: " + localStorage.getItem("valor" + i) + "<hr>";
		 
		 // calcula o total dos recheios
		 valor = parseFloat(localStorage.getItem("valor" + i)); // valor convertido com o parseFloat()
		 total = (total + valor); // arredonda para 2 casas decimais com o .toFixed(2)
	 }
 } 
 // exibe o total dos recheios
 document.getElementById("total").innerHTML = total.toFixed(2); 
</script>
</body>
</html>
