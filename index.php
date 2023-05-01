<?php

require("config/commandes.php");

  $Produits=afficher();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>LaVidaShop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  html,
body,
img,
figure {
  max-width: 100%;
}
html,
body {
  overflow-x: hidden;
  color: #000;
  -ms-overflow-style: scrollbar;
  -webkit-font-smoothing: antialiased;
}
a,
a:hover,
a:focus,
a:active {
  text-decoration: none;
  color: inherit;
}
a {
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
}
.ct-u-paddingTop10 {
  padding-top: 10px !important;
}
.ct-footer {
  background-color: #111;
  padding-top: 70px;
  margin-top: 20px;
  position: relative;
}
.ct-footer-pre {
  width: 100%;
  padding-bottom: 55px;
  border-bottom: 1px solid #555;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.ct-footer-pre span {
  font-family: 'Open Sans Condensed', sans-serif;
  color: #ebebeb;
  font-size: 30px;
}
.ct-footer-pre .form-group {
  position: relative;
  margin: 0;
}
.ct-footer-pre .form-group:before,
.ct-footer-pre .form-group:after {
  content: '';
  display: table;
}
.ct-footer-pre .form-group:after {
  clear: both;
}
.ct-footer-pre .form-group input {
  border: 1px solid #00bff3;
  background-color: #333;
  color: #fff;
  height: 50px;
  padding: 0 30px;
  margin: 0 5px;
  border-radius: 0 !important;
}
.ct-footer-pre .form-group button {
  height: 50px;
  position: relative;
  width: 80px;
  padding: 0
}
.ct-footer-list {
  padding: 50px 0;
  list-style: none;
  padding-left: 0;
  display: table;
  width: 100%;
  border-bottom: 1px solid #555;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.ct-footer-list > li .ct-footer-list-header {
  font-family: 'Open Sans Condensed', sans-serif;
  color: #00bff3;
  font-size: 30px;
}
.ct-footer-list > li ul {
  list-style: none;
  padding-left: 0;
}
.ct-footer-list > li ul li a {
  color: #fff;
}
.ct-footer-list > li ul li a:hover,
.ct-footer-post a:hover {
  text-decoration: underline;
}
.ct-footer-post {
  background: #000;
  padding: 30px 0;
}
.ct-footer-post .inner-left,
.ct-footer-post .inner-right {
  padding: 20px 0;
}
.ct-footer-post ul {
  list-style: none;
  padding-left: 0;
  margin: 0 -20px;
}
.ct-footer-post ul li {
  display: inline-block;
  margin: 0 20px;
}
.ct-footer-post a {
  color: #fff;
}
.ct-footer-post p {
  color: #fff;
}
.ct-footer-meta {
  padding-top: 30px;
}
.ct-footer-meta .ct-socials {
  padding: 20px 0;
}
.ct-footer-meta .ct-socials li {
  padding: 0 3px;
}
.ct-footer--with-button {
  padding-top: 150px;
}
address {
  color: #fff;
  display: inline-block;
}
address span {
  font-weight: 600;
}
address a {
  color: #fff;
}
address a:hover {
  text-decoration: underline;
}
.btn {
  font-family: 'Open Sans Condensed', sans-serif;
  border-radius: 0;
  border: none;
  text-transform: uppercase;
  color: #111;
  font-size: 26px;
  padding: 12px 30px;
}
.btn.btn-motive {
  background-color: #00bff3;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.btn.btn-motive:hover,
.btn.btn-motive:hover:active {
  background-color: #00bff3;
}
.btn.btn-violet {
  color: #fff;
  background-color: #4f4f99;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.btn.btn-violet:hover {
  background-color: #37376b;
}
.btn.btn-violet:hover:active {
  background-color: #2f2f5b
}
.btn.btn-green {
  color: #fff;
  background-color: #43670f;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.btn.btn-green:hover {
  background-color: #36520c;
}
.btn.btn-green:hover:active {
  background-color: #314a0b;
}
.btn.btn-red {
  color: #fff;
  background-color: #da2229;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.btn.btn-red:hover {
  background-color: #ae1b21;
}
.btn.btn-red:hover:active {
  background-color: #9d181e
}
.btn.btn-white {
  background-color: #fff;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.btn.btn-white:hover {
  background-color: #d9d9d9;
}
.btn.btn-white:hover:active {
  background-color: #c9c9c9
}
.btn.btn-large {
  padding: 20px 50px;
  font-size: 30px;
  white-space: normal;
}
.ct-mediaSection {
  background-attachment: fixed;
}
.ct-section_header--type1 {
  font-family: 'Open Sans Condensed', sans-serif;
  color: #000;
  font-size: 115px;
  text-transform: uppercase;
}
.ct-section_header--type2 small {
  font-family: 'coquette', fantasy;
  font-size: 58px;
  line-height: .7;
  display: block;
  font-weight: 700;
  position: relative;
  left: -12px;
}
.ct-section_header--type2 span {
  font-family: 'Bebas Neue';
  font-size: 115px;
  line-height: .8;
}
.ct-section_header--type2 img {
  display: inline-block;
  float: left;
  position: relative;
  top: 15px;
  padding-right: 3px;
}
.ct-section_header--type3 {
  text-align: center;
}
.ct-section_header--type3 small {
  font-family: 'coquette', fantasy;
  font-size: 50px;
  padding: 15px 0;
  font-weight: 700;
  color: #fff;
  background-image: url("/core/fileparse.php/16/urlt/../images/ribbon.png");
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  display: block
}
.ct-section_header--type3 span {
  font-family: 'Bebas Neue';
  font-size: 150px;
  font-weight: 400;
  text-transform: uppercase;
  line-height: .85
}
.ct-section_header--type4 {
  text-align: center;
}
.ct-section_header--type4:before,
.ct-section_header--type4:after {
  content: '';
  display: table
}
.ct-section_header--type4:after {
  clear: both
}
.ct-section_header--type4 small {
  font-family: 'coquette', fantasy;
  font-size: 50px;
  color: inherit;
  font-weight: 700;
  display: block
}
.ct-section_header--type4 span {
  font-family: 'nimbus-sans-condensed', sans-serif;
  font-weight: 400;
  font-weight: bold;
  font-size: 150px;
  text-transform: uppercase;
  display: block;
  line-height: .7
}
.ct-section_header + p {
  font-size: 30px;
  font-weight: 700;
  letter-spacing: -1.5px;
  text-align: center;
}
.ct-section_header--type4 + p {
  font-family: 'nimbus-sans-condensed', sans-serif;
  font-weight: 400;
  font-size: 40px;
  font-weight: 700;
  line-height: 1;
}
@media (min-width:1200px) {
  .ct-footer-pre {
    display: table;
  }
  .ct-footer-pre > .inner {
    display: table-cell;
    vertical-align: middle;
  }
  .ct-footer-list > li {
    width: 20%;
    display: table-cell;
    vertical-align: top;
  }
  .ct-footer-list > li:last-child {
    width: 7%;
  }
}

@media (max-width:1199px) {
  .ct-footer-pre .form-group {
      padding-top: 15px
  }
}
@media (max-width: 1199px) {
  .ct-footer-list > li {
    display: inline-block;
    float: left;
  }
}
@media (min-width:992px) {
  .ct-footer-post .inner-left {
    float: left;
  }
  .ct-footer-post .inner-right {
    float: right;
  }
}
@media (max-width:991px) {
  .ct-footer-post {
    text-align: center;
  }
}
@media (min-width: 768px) and (max-width: 1199px) {
  .ct-footer-list > li {
    width: 33.3333%;
  }
}
@media (min-width:768px) {
  .ct-footer-post p {
    display: inline-block;
  }
  .ct-footer-post p + p {
    padding-left: 50px;
  }
}
@media (max-width:767px) {
  address {
    padding-top: 30px;
  }
}
@media (min-width: 480px) and (max-width:767px) {
  .ct-footer-list > li {
    width: 50%;
  }
}
@media (min-width:480px) {
  .ct-footer-pre .form-group button {
    top: -1px;
  }
  .ct-footer-pre .form-group input {
    width: 331px;
  }
}
@media (max-width:479px) {
  .ct-footer-pre .form-group input {
    float: left;
    width: 70%;
    margin: 0;
  }
  .ct-footer-pre .form-group button {
    float: left;
    width: 30%;
  }
  .ct-footer-list > li {
    width: 100%;
    text-align: center;
  }
  .ct-footer-list {
    padding: 20px 0;
  }
  .btn.btn-large {
    padding: 20px 10px;
    line-height: .9;
    font-size: 26px;
    letter-spacing: -.2px;
  }
  .ct-section_header--type1 {
    font-size: 60px;
    line-height: .8;
  }
  .ct-section_header + p {
    font-size: 22px;
  }
  .ct-section_header--type3 small {
    font-size: 25px;
  }
  .ct-section_header--type4 small {
      font-size: 40px;
  }
  .ct-section_header--type3 span {
    font-size: 90px;
  }
  .ct-section_header--type4 span {
      font-size: 80px;
  }
  .ct-section_header--type4 + p {
    font-size: 28px;
  }
}
body {
        background-color: white;
        color: black;
        font-size: 25px;
      }
      .dark-mode {
        background-color: black;
        color: white;
      }
      .btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #04AA6D;
  color: green;
}
</style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Bienvenue dans notre boutique : Développé par Mohammed Elboustani,Anas Boudlal & Kamal Hidor
J'espère que vous l'aimerez.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Sign in</h4>
          <ul class="list-unstyled">
            <li><a href="login.php" class="text-white">Se connecter</a></li>
            <li><a href="panier.php" class="text-white">Mon Panier</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-light bg-warning">
    <div class="container-xxl">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>LaVida-Shop</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

<div>
      <button onclick="darkMode()">Darkmode</button>
    </div>
    <script>
      function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
      }
    </script>
    <div class= "container-xxl">
  <form method="POST">
    <label for="disponible-filter">Filtrer par disponibilité :</label>
    <select class ="dark-mode"name="select" id="select">
      <option value="All"> All </option>
      <option value="disponible">disponible</option>
      <option value="non_disponible">non_disponible</option>
    </select>
    <input type="submit" value="Filter" id = "Filter">

    <label  for="disponible-filter">Filtrer par Categorie :</label>
    <select class="dark-mode" name="select1" id="select1">
      <option value="All"> All </option>
      <option value="shoes">shoes</option>
      <option value="clothes">clothes</option>
    </select>
    <input type="submit" value="Filter" id = "Filter1">
  </form>
</div>
  <div>
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php 
      $val1 = "All";
      $val = "All";
      if (isset($_POST["select"])){
          if (!empty($_POST["select"])){
            $val = htmlspecialchars($_POST["select"]);
          }
        }
      if (isset($_POST["select1"])){
          if (!empty($_POST["select1"])){
            $val1 = htmlspecialchars($_POST["select1"]);
          }
        }
    
        echo "<h2>" . $val ."\n". $val1 . "</h2>";
        foreach($Produits as $produit):
        if (($val == $produit -> disponible || $val == "All")  &&  ($val1 == $produit -> categorie  || $val1 == "All")){
      ?> 
        <div class="col">
          <div class="">
            <h3><?= $produit->nom ?></h3>
            <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class="btn"><img src="<?= $produit->image ?>" style="width: 24%"></button></a>

            <div class="card-body">
              <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class ="btn btn-sm btn-success">Ajouter au panier</button></a>
                </div>
                <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
              </div>
            </div>
          </div>
        </div>
  <?php } endforeach; ?>


      </div>
    </div>
  </div>

</main>



<footer class="ct-footer">
  <div class="container">
    <ul class="ct-footer-list text-center-sm">
      <li>
        <h2 class="ct-footer-list-header">Learn More</h2>
        <ul>
          <li>
            <a href="">Company</a>
          </li>
          <li>
            <a href="">Clients</a>
          </li>
          <li>
            <a href="">News</a>
          </li>
          <li>
            <a href="">Careers</a>
          </li>
        </ul>
      </li>
      <li>
        <h2 class="ct-footer-list-header">Services</h2>
        <ul>
          <li>
            <a href="">Design</a>
          </li>
          <li>
            <a href="">Marketing</a>
          </li>
          <li>
            <a href="">Sales</a>
          </li>
          <li>
            <a href="">Programming</a>
          </li>
          <li>
            <a href="">Support</a>
          </li>
        </ul>
      </li>
      <li>
        <h2 class="ct-footer-list-header">The Industry</h2>
        <ul>
          <li>
            <a href="">Thought Leadership</a>
          </li>
          <li>
            <a href="">Webinars</a>
          </li>
          <li>
            <a href="">Events</a>
          </li>
          <li>
            <a href="">Sponsorships</a>
          </li>
          <li>
            <a href="">Advisors</a>
          </li>
          <li>
            <a href="">Training Program</a>
          </li>
          <li>
            <a href="">Activities & Campaigns</a>
          </li>
        </ul>
      </li>
      <li>
        <h2 class="ct-footer-list-header">Public Relations</h2>
        <ul>
          <li>
            <a href="">WebCorpCo Blog</a>
          </li>
          <li>
            <a href="">Videos</a>
          </li>
          <li>
            <a href="">News Releases</a>
          </li>
          <li>
            <a href="">Newsletters</a>
          </li>
        </ul>
      </li>
      <li>
        <h2 class="ct-footer-list-header">About</h2>
        <ul>
          <li>
            <a href="">FAQ</a>
          </li>
          <li>
            <a href="">Our Board</a>
          </li>
          <li>
            <a href="">Our Staff</a>
          </li>
          <li>
            <a href="">Contact Us</a>
          </li>
        </ul>
      </li>
    </ul>
    
  <div class="ct-footer-post">
      <div class=" inner-right container-fluid">
        <p>Copyright © 2022 &nbsp;<a href="">Privacy Policy</a></p>
        <p><a class="ct-u-motive-color" href="" target="_blank">Web Design</a> Anas Boudlal,Mohammed Elboustani & Kamal Hidor, Ensa Khouribga: IRIC<a href="" target="_blank"></a></p>
      </div>
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
