<?php 
session_start();

if(!isset($_SESSION['username'])){
  header('Location: login.php');
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
  integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="styling.css">
     <link rel="stylesheet" href="script.js">
  <title>JACK'S AUTOMOBILE</title>
</head>
<body">
<div class="mode-tog"></div>
  <div class="container">
    <div class="dark-mode"></div>
  </div>

  <script>
    let modeToggle =document.querySelector ('.mode-tog');
    let darkMode =document.querySelector ('.dark-mode');

    modeToggle.addEventListener('click', () =>{
      darkMode.classList.toggle('active');
      modeToggle.classList.toggle('active');
    })
  </script>  
  
  <header>

    <div class="navbar">
        
      <div class="logo"> <a href="#"> JACK'S<P id="logobar">AUTOMOBILE</P></a></div>
      <ul class="links"> 
        <li><a href="hero"></a></li>
        <li><a href="home">Home</a></li>
        <li><a href="cars">Cars</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="aboutjack.html">About Me</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>


      <a href="BuyForm.php" class="action_btn">Buy Now!</a>
      <div class="toggle_btn">
        <i class="fa-solid fa-bars"></i>
      </div>

    </div>
    <div class="hero">
        <div class="welmess">
            <h2>FIND</h2><h2>your personal car here.</h2>
            <h2><?php echo "Welcome ", $_SESSION['username']?></h2>
        </div>
    <div class="dropdown_menu open">
      <li><a href="hero"></a></li>
      <li><a href="home">Home</a></li>
      <li><a href="cars">Cars</a></li>
      <li><a href="contact">Contact</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="aboutjack.html">About Me</a></li>
      <li><a href="BuyForm.php" class="action_btn">Buy Now!</a></li>
      <li><a href="logout.php">Logout</a></li>
     </div>
  </header>

  <script>
    const toggleBtn = document.querySelector('toggle_btn')
    const toggleBtnIcon = document.querySelector('toggle_btn i')
    const DropdownMenu = document.querySelector('dropdown_menu')

    toggleBtn.onclick = function () {
      DropdownMenu.classList.toggle('open')
      const isOpen =  DropdownMenu.classList.contains('open')


      toggleBtnIcon.classList =isOpen 
      ? 'fa-solid fa-xmark'
      : 'fa-solid fa-bars'
    }
  </script>


  <div class="section-heading"> <br>
    <h2>Featured Cars</h2> <br>
    <a href="cars.html" class="action_btn">view more <i class="fa fa-angle-right"></i></a> 
  </div>
</div>
<div class="col-lg-4 col-md-6">
  <div class="product-item"> <br>
    <a href="car-details.html"><img class='addpic'src="c:\Users\ACER\Desktop\jacknitip\road-the-sun-lexus-photographer-wallpaper-preview.jpg" alt=""></a>
    <div class="down-content">
      <a href="car-details.html"><h4 class="cartext">Lexus LC 500</h4></a>

      <h6 class="cartext"><small><del> $11199.00</del></small> $11179.00</h6>

      <p class="textedit">470 hp &nbsp;/&nbsp; hybrid &nbsp;/&nbsp; 2023 &nbsp;/&nbsp; Brand New</p>

    
</div>

<div class="col-lg-4 col-md-6">
  <div class="product-item">
    <a href="car-details.html"><img class="addpic" src="c:\Users\ACER\Desktop\jacknitip\bmw-bmw-m8-gran-coupe-bmw-m8-bmw-m8-gran-coupe-competition-bordeaux-car-hd-wallpaper-preview.jpg" alt=""></a>
    <div class="down-content">
      <a href="car-details.html"><h4>BMW M8</h4></a>

      <h6 class="cartext"><small><del> $11199.00</del></small> $11179.00</h6>

      <p class="textedit">475 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2020 &nbsp;/&nbsp; Brand New</p>

      <small>
        <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
        <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
        <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
      </small>

    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6">
  <div class="product-item">
    <a href="car-details.html"><img class="addpic" src="c:\Users\ACER\Desktop\jacknitip\koenigsegg-regera-runway-e1687729000499.jpg" alt=""></a>
    <div class="down-content">
      <a href="car-details.html"><h4>konigsegg regera</h4></a>

      <h6 class="cartext"><small><del> $11199.00</del></small> $11179.00</h6>

      <p class="textedit">1500 hp &nbsp;/&nbsp; hybrid &nbsp;/&nbsp; 2019 &nbsp;/&nbsp; Brand New</p>

      <small>
        <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
        <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
        <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
      </small>
    </div>
  </div>
</div>
<div class="footer">
  <div class="col-1">
<h3>USEFUL LINKS</h3>
<a href="about">About</a>
<a href="service">Service</a>
<a href="contact">Contact</a>
<div> 
  
</div>

<script src="script.js"></script>


<div class="col-2"></div>
<div class="col-3"></div>
</div>
</body>
</html>