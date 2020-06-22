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

    form {
        padding-top: 100px;
    }
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
<div class="w3-container-padding">
    <div class="w3-col" style="width: 45%">
        <div class="w3-container">
            <form action="contact" method="post">
                <div class="w3-row-padding">
                    <div class="w3-col w3-half">
                        <label class="w3-text">Naam</label>
                        <input class="w3-input w3-border" type="text" name="naam" required>
                    </div>
                    <div class="w3-col w3-half">
                        <label class="w3-text">E-mail</label>
                        <input class="w3-input w3-border" type="text" name="email" required>
                    </div>
                </div>
                <div class="w3-col w3-padding">
                    <label class="w3-text">Bericht</label>
                    <input class="w3-input w3-border" type="text" name="bericht" required>
                </div>
                <div class="w3-col w3-padding">
                    <button class="w3-btn w3-yellow w3-border" type="submit">Verstuur Bericht</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
    <div class="w3-col" style="width: 10%"></div>
    <div class="w3-col" style="width: 45%">

    </div>
</div>
