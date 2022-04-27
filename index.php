<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift List</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" href="css/icon.png">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
<!--Barra de navegação:Inicio-->
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">Gift List</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Creat a list</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
<!--Barra de navegação:Fim-->
  <div class="banner"></div>
  
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
<!--Barra de navegação:Fim-->

   <!--Carrossel:Inicio-->
   <div class="content-carrossel">Destaques</div>
<div class="wrapper">
  <div class="carousel owl-carousel">
     <div class="card card-1">
        <img src="css/fone.jpg" alt="Fone">
     </div>
     <div class="card card-2">
      <img src="css/celula.jpg" alt="Fone">
     </div>
     <div class="card card-3">
      <img src="css/luffão.jpg" alt="Fone">
     </div>
     <div class="card card-4">
      <img src="css/milgrau.jpg" alt="Fone">
     </div>
     <div class="card card-5">
      <img src="css/ninin.jpg" alt="Fone">
     </div>
   </div>
 </div>

<!---Carrossel:Fim--->

<!----Rolagem pro topo:inicio---->
   <div class="arrow-btn">
     <a href="#"><span><i class="fas fa-angle-up"></i></span></a>
   </div>
   <!----Rolagem pro topo:Fim---->

  <!--Rodapé:Inicio-->
  <footer>
    <div class="footer-content">
      <h2>Gift List</h2>
      <p>Texto elaborado sobre o site</p>
      <ul class="socials">
        <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" title="Discord"><i class="fab fa-discord"></i></a></li>
        <li><a href="#" title="YouTube"><i class="fab fa-youtube"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>Copyright&copy;2022 Gift List.</p>
    </div>
  </footer>
  <!--Rodapé:Fim-->
</body>
</html>