<!DOCTYPE html>
<html>
<head>
  <title>GIF Refrigerações: Sobre nós</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

body {
  background-color: #C0C0C0;
  margin: 0;
  padding: 0;
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

.content {
  display: flex;
  justify-content: space-between;
  padding: 20px;
}

.dono-info{
  flex-basis: 30%;
  text-align: center;
  margin-bottom: 20px;
}

.dono-info img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  align-items: center;
  margin-top: 60%;
}

.dono-info h2 {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  margin: 0;
  font-size: 24px;
}

.dono-info p {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  margin: 0;
  font-size: 18px;
}

.empresa-info {
  flex-basis: 65%;
  display: flex;
  align-items: center;
}

.empresa-info h1{
    text-decoration:underline;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
}

.empresa-info p{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 18px;
}

footer {
  background-color: #87CEEB;
  color: black;
  padding: 20px;
  margin-top: 0px;
  font-size: 18px;
}
.dono-container {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}
.empresa-valores {
  background-color: #708090; 
  padding: 20px;
  text-align: center;
}

.empresa-valores h2 {
  text-decoration:underline;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 24px;
  margin-bottom: 10px;
}

.empresa-valores p {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.missao, .valor, .visao {
  display: inline-block;
  max-width: 300px;
  background-color: #ADD8E6;
  border-radius: 50px;
  padding: 20px;
  margin: 10px;
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
  <section class="content">
  <div class="dono-info">
    <img src="dono.jpg" >
    <h2>Isadora C Heim</h2>
    <p>CEO e Fundadora</p>
  </div>
  <div class="dono-info">
    <img src="dono2.jpg" >
    <h2>Gyovanna Carolina</h2>
    <p>Diretora de Operações</p>
  </div>
  <div class="dono-info">
    <img src="dono3.jpg" >
    <h2>Fabielle Tuffi</h2>
    <p>Diretora Financeira</p>
  </div>
    <div class="empresa-info">
      <div class="company-text">
        <h1>Sobre nós</h1>
        <p>A GIF Refrigerações é líder no ramo de refrigeração desde 2010. Fundada por Isadora C Heim, a empresa tem se destacado pela qualidade de seus produtos e serviços, atendendo com excelência a todos os clientes.</p>
        <p>Nosso compromisso é oferecer soluções inovadoras em manutenção de refrigeradores, garantindo a satisfação e conforto dos nossos clientes. Trabalhamos com uma equipe de profissionais altamente qualificados e peças de última geração, garantindo a eficiência e confiabilidade de nossos serviços.</p>
        <p>Além disso, somos uma empresa preocupada com o meio ambiente e investimos em tecnologias sustentáveis para reduzir o impacto ambiental de nossas operações. Temos o compromisso de contribuir para um futuro mais sustentável e estamos sempre em busca de novas soluções e práticas eco-friendly.</p>
        <p>Seja bem-vindo à GIF Refrigerações! Estamos aqui para atendê-lo com dedicação e profissionalismo. Conte conosco para suas necessidades de manutenção.</p>
    </div>
  </section>
  <section class="empresa-valores">
    <div class="missao">
      <h2>Missão</h2>
      <p>Nossa missão é proporcionar soluções em refrigeração com excelência e compromisso, garantindo o conforto e bem-estar dos nossos clientes. Buscamos oferecer serviços de instalação, manutenção e conserto de equipamentos com alta qualidade, aliando tecnologia de ponta e conhecimento técnico especializado. </p>
    </div>
    <div class="valor">
      <h2>Valores</h2>
      <p>Nossos valores fundamentam-se em excelência, ética, transparência, comprometimento, valorização das pessoas, sustentabilidade e inovação. Esses princípios guiam nossa trajetória e fortalecem o vínculo de confiança com nossos clientes. Estamos comprometidos em oferecer serviços de qualidade, promovendo o bem-estar. </p>
    </div>
    <div class="visao">
      <h2>Visão</h2>
      <p>Na GIF Refrigerações, nossa visão é nos consolidarmos como referência no setor de serviços de refrigeração, sendo reconhecidos pela excelência em nossos serviços e pelo comprometimento em superar as expectativas de nossos clientes. Buscamos nos tornar líderes de mercado, ampliando nossa atuação para novas regiões.</p>
    </div>
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
