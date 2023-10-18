<!DOCTYPE html>
<html>
<head>
  <title>GIF Refrigerações</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body{
      background-color: #C0C0C0;
      margin: 0;
      padding: 0;
    }
    .carousel {
      width: 100%;
      height: 660px;
      overflow: hidden;
      position: relative;
      display: block;
    }

    .carousel img {
      width: 100%;
      height: auto;
      display: block; 
    }

    .carousel img:first-child {
      display: block;
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

    /*.informacao{
       margin-top: 0px;
      background-color:#6495ED; 
      padding: 150px;
    }*/

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
    }

    .carousel .control {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 5px 10px;
      cursor: pointer;
    }

    .carousel .previous {
      left: 10px;
    }

    .carousel .next {
      right: 10px;
    }
    
    .carousel-arrow {
      border-radius: 100px;
      background-color: #87CEEB;
      width: 40px;
      height: 40px;
      color: aliceblue;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .carousel-arrow span {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: 24px;
      border-radius: 5px;
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
.empresa {
  background-color: #708090; 
  padding: 10px;
  text-align: center;
}

.empresa h2 {
  text-decoration:underline;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 24px;
  margin-bottom: 10px;
}

.empresa p {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.servicos, .sobre, .pecas {
  display: inline-block;
  max-width: 300px;
  background-color: #ADD8E6;
  border-radius: 50px;
  padding: 20px;
  margin: 10px;
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
  <section class="carousel">
    <img src="https://seupaschoal.blog.br/wp-content/uploads/2022/04/shutterstock_2119508534-1360x765.jpg" alt="Imagem 1">
    <img src="https://blog.adias.com.br/wp-content/uploads/2022/07/post_thumbnail-04a969b5b2ffbebc4c68706a18df9707-780x450.jpeg" alt="Imagem 2">
    <img src="https://globalad.com.br/wp-content/uploads/2020/02/Dia-Mundial-da-Refrigerac%CC%A7a%CC%83o-scaled.jpeg" alt="Imagem 3">
    <div class="carousel-arrow previous"><span>&lt;</span></div>
    <div class="carousel-arrow next"><span>&gt;</span></div>

  </section>
  <section class="empresa">
    <div class="servicos">
      <h2>Missão</h2>
      <p>Nossa missão é proporcionar soluções em refrigeração com excelência e compromisso. </p>
    </div>
    <div class="sobre">
      <h2>Valores</h2>
      <p>Nossos valores fundamentam-se em excelência, ética, transparência, comprometimento. </p>
    </div>
    <div class="pecas">
      <h2>Visão</h2>
      <p>Na GIF Refrigerações, nossa visão é nos consolidarmos como referência no setor de serviços de refrigeração.</p>
    </div>
  </section>
  <div class="informacao">
  </div>
  <button class="whatsapp-button" onclick="window.open('https://api.whatsapp.com/send?phone=5541997460677', '_blank')">Fale Conosco pelo WhatsApp</button>
  
  
  <footer>
    <div class="container">
      <p>&copy; 2023 GIF Refrigerações. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script>
    var carousel = document.querySelector('.carousel');
    var images = carousel.querySelectorAll('img');
    var currentIndex = 0;
    var intervalId;

    function showImage(index) {
      for (var i = 0; i < images.length; i++) {
        images[i].style.display = 'none';
      }
      images[index].style.display = 'block';
    }

    function nextImage() {
      currentIndex++;
      if (currentIndex >= images.length) {
        currentIndex = 0;
      }
      showImage(currentIndex);
    }

    function previousImage() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = images.length - 1;
      }
      showImage(currentIndex);
    }

    function startAutoPlay() {
      intervalId = setInterval(nextImage, 4000);
    }

    function stopAutoPlay() {
      clearInterval(intervalId);
    }

    carousel.addEventListener('mouseover', stopAutoPlay);
    carousel.addEventListener('mouseout', startAutoPlay);

    startAutoPlay(); // Inicia o carrossel automático

    var previousButton = carousel.querySelector('.previous');
    var nextButton = carousel.querySelector('.next');

    previousButton.addEventListener('click', previousImage);
    nextButton.addEventListener('click', nextImage);
  </script>
</body>
</html>

