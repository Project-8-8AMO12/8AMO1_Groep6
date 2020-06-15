<html lang="en">
<title>Imkers Leiden | Vereniging</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Activiteiten</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Agenda</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Bijenstal</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Zwerm</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Stertselaar</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Vereniging</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cursussen</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Nieuws</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Shop</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-yellow w3-center" style="padding:128px 16px;color:white!important;height:10vw!important;">
  <h1 class="w3-margin w3-jumbo">Vereniging</h1>
</header>

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>De Imkers</h2>
<p>Maak kennis met de bijenhouders!</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="{{ asset('img/imker1.jpg') }}" alt="Imker Piet" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Piet Prikmeniet</h3>
  <p>Imker</p>
</div>

<div class="w3-quarter">
  <img src="{{ asset('img/imker2.jpg') }}" alt="Imker Henk" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Henk Honing</h3>
  <p>Imker</p>
</div>

<div class="w3-quarter">
  <img src="{{ asset('img/imker3.jpg') }}" alt="Imker Jan" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Jan Bijenman</h3>
  <p>Imker</p>
</div>

<div class="w3-quarter">
  <img src="{{ asset('img/imker4.jpg') }}" alt="Imker Hans" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Hans Hoek</h3>
  <p>Imker in opleiding</p>
</div>

</div>
</div>
