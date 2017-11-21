<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Une Couverture Pour l'Hiver</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="essai.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
  </head>
  <body>

<div id="page">
<div id="barrenav">
  <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#page">Accueil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Qui sommes-nous ? <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#presentation">Présentation</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#quisommesnous">Les membres du bureau</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos actions <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#edi">Les maraudes en images</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#petitsdejeuner">Les petits déjeuner caritatifs</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#carte">Localisation de nos actions</a></li>
          </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ils parlent de nous ! <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#edi">Presse</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#partenaires">Partenaires</a></li>
        </ul>
        </li>
            <li><a href="#nouscontacter">Nous contacter</a></li>
            <li><a href="#">Le blog</a></li>

            <li><a href="https://www.helloasso.com/associations/une-couverture-pour-l-hiver">Faire un don !</a></li>


      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li>
            <div id="logoins">
            <a href="https://www.instagram.com/unecouverturepourlhiver/"><img src="images/instagram.png" alt="Logo d'Instagram"><a>
            <a target="_blank" href="https://www.instagram.com/unecouverturepourlhiver/">
              <i class="fa fa-linkedin-square fa-lg" style="color:#0077B5;"></i>
            </a>
            </div>
          </li>
          <li>

            <div id="logofb">
            <a href="https://fr-fr.facebook.com/unecouverturepourlhiver/"><img src="images/fb1.jpg" alt="logo facebook"></a>
            <a target="_blank" href="https://fr-fr.facebook.com/unecouverturepourlhiver/">
              <i class="fa fa-facebook-square fa-lg" style="color:#4267b2;"></i>
            </a>
            </div>

          </li>
          <li>
            <div id="logotwitter">
            <a href="https://twitter.com/unecouverture?lang=fr"><img src="images/twitter.png" alt="logo de Twitter"></a>
            <a target="_blank" href="https://twitter.com/unecouverture?lang=fr"> </a>
              <i class="fa fa-github-square fa-lg "></i>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="entete">
  <div class="titre"></div>
  <h1>Une Couverture Pour l'Hiver</h1>
</div>

<div id="presentation">
  <div id="qsm"><h2>Qui sommes-nous ?</h2></div>
  <div id="p"></div>
    <p>Une Couverture Pour l'Hiver (UCPH) est une association carritative qui vient en aide aux personnes sans-abris.
      Son mode d'action consiste à  distribuer des couvertures de survie ainsi que des sacs de couchage et à apporter un soutien moral
      aux personnes sans-abris autour de boissons chaudes. Créée en 2015, elle compte désormais 80 membres. N'hésitez
      à faire un don, ou, si vous le désirez, devenir membre de l'association (nous contacter).</p>
  </div>

  <div id="quisommesnous">

</div>
</div>
  <div id="edito">
    <div id="edi">

    </div>
    <div id="maraudes">
        <div id="citations">
          <img src="images/c1.png" alt="" class="active">
          <img src="images/c2.png" alt="">
          <img src="images/c3.png" alt="">
          <img src="images/c4.png" alt="">
        </div>
        <div class="photosmaraudes">
          <img src="images/pm11.png" alt="">
          <img src="images/pm21.png" alt="">
          <img src="images/pm4.png" alt="">
        </div>
        <div id ="uimg"><img src="images/pm1" alt=""></div>
        <div id="petitsdejeuner">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div id="img1">
          <img src="images/petitdej.jpg" alt="">
          <img src="images/petitdej1.jpg" alt="">
        </div>
        </div>

        <div id="carte">

        </div>
    </div>

    <div id="presse">

    </div>

    <div id="partenaires">

    </div>

    <div id="nouscontacter">
      <div id="h"><h2>Nous contacter !</h2></div>
      <?php
      include("nouscontacter.php");
       ?>
    </div>
    </div>
    </div>



</div>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    <script src="js/transition.js"></script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax/parallax.js"></script>
  </body>
</html>

<!-- https://www.youtube.com/watch?v=nJWq74MHplc&t=909s -->
<!-- drone.uav-experience.fr -->
<!-- http://grupo-alturas.com -->
<!-- https://www.songsterr.com/a/wsa/johann-sebastian-bach-jesu-joy-of-mans-desiring-tab-s39556t0 -->
