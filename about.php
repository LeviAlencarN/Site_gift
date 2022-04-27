<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">Gift List</a>
      </div>
<!--Barra de navegação:Inicio-->
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Creat a list</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
    <h1 class="sobre">Quem somos nós?</h1>
    <br>
    <h3 class="oxe">
        Somos um grupo de estudantes e aventureiros da programação, responsáveis por este site.
        <br><br>
        <h1 class="objetivo">Qual o intúito da criação do site?</h1>
        <br><br>
        <h3 class="int"><p>Temos o intúito de facilitar a vida das pessoas na hora de criar uma lista de presentes.</p>
Sendo assim, disponibilizamos produtos de alta qualidade e baixo custo para todos os gostos e todas as idades.
        </h3>
        <br><br>
        <h2 class="vid">Com dificuldade de usar o site? Assista nossa video aula:</h2>
    </h3>
    <video id="video" controls preload="metadata">
        <source src="sponge.mp4" type="video/mp4">
        <source src="resources/myvideo.webm" type="video/mp4">
        <track label="English" kind="captions" srclang="en" src="resources/myvideo-en.vtt" default>
        <track label="Deutsch" kind="captions" srclang="de" src="resources/myvideo-de.vtt">
        <track label="Español" kind="captions" srclang="es" src="resources/myvideo-es.vtt">
     </video>
  </nav>
<!--Barra de navegação:Fim-->
  <div class="banner"></div>
  <div class="about">
    <div class="content"></div>

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
</body>
</html>