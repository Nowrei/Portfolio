<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio Cedric Furlan</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Festive&family=Oswald:wght@600&display=swap" rel="stylesheet">
    
</head>
<body>

    <header>
      <a href="#" class="brand">Cedric Furlan</a>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        <a href="#">Acceuil</a>
        <a href="#info-compétence">Compétences et Info</a>
        <a href="#Projets">Projets</a>
        <a href="#">Contact</a>

      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>
  
    <script type="text/javascript">
    //javascript for navigation bar effect on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle('sticky', window.scrollY > 0);
    });

    //javascript for responsive navigation sidebar menu
    var menu = document.querySelector('.menu');
    var menuBtn = document.querySelector('.menu-btn');
    var closeBtn = document.querySelector('.close-btn');

    menuBtn.addEventListener("click", () => {
      menu.classList.add('active');
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove('active');
    });
    </script>


    <div class="slider">
      <div class="slide current">
        <div class="content">
          <h1>HTML</h1>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>CSS</h1>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Js</h1>
        </div>
        <div class="next">
          <i class="fas fa-chevron-circle-right"></i>
      </div>
      <div class="prev">
          <i class="fas fa-chevron-circle-left"></i>
      </div>
      </div>
    </div>

  

  <div class="info">

      <div class="photo">
      </div>
      <div class="intro">

        <h2>Information</h2><br>
        <p><span>B</span>onjour et Bienvenue sur mon portfolio ! Je m'appelle Cédric Furlan. Souhaitant faire un métier dans un domaine qui me plait je me suis inscrit à la formation de développeur web et mobile de Simplon Charleville. Vous découvrirez ici mes compétences et les divers projets auquel j'ai participé durant ma formation.</p>
      </div>
      
  </div>

  <div class="competence">
  <div class="dashboard">
    <div class="html">
  <svg>
    <circle class="bg" cx="57" cy="57" r="52" />
    <circle class="meter-1" cx="57" cy="57" r="52" /> 
  </svg>
  <h2>html</h2>
  </div>
  <div class="css">
  <svg>
    <circle class="bg" cx="57" cy="57" r="52" />
    <circle class="meter-2" cx="57" cy="57" r="52" />
  </svg>
  <h2>CSS</h2>
  </div>
  <div class="js">
  <svg>
    <circle class="bg" cx="57" cy="57" r="52" />
    <circle class="meter-3" cx="57" cy="57" r="52" />
  </svg>
  <h2>Js</h2>
  </div>
</div>
  </div>






      <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
      </div>
      <script src="main.js"></script>
  </body>
</html>
      
      