<?php
session_start();
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto nuoma</title>
    <style>
        a {
            color: black;
        }
    </style>
</head>

<body>
    
</body>
</html>

<div id="headerContainer">
        <div id="logo" style="flex-grow: 1;">
    <!--        logo-->
           <a href="index.php"><img src="images/logo1.svg" alt="logo" width="200px"></a>
        </div>
        
        <div id="textNearLogo" style="flex-grow: 3;">
            <img src="images/phone.png" alt="tel">
            <span class="headIconText">Skambinkite mums: <a href="tel:+37061234567">+370 612 34567</a></span>
            <br>
            <img src="images/place.png" alt="loc">
            <span class="headIconText">Adresas: Vilniaus g. 1, Vilnius</span>
        </div>
        <div class="loginArea" style="flex-grow: 6;">
            <?php
// jei vartotojas neprisijungęs
if (!isset($_SESSION['u_id'])) {
    echo '<div><form action="src/validatelogin.php" method="post">
                            <div class="loginItems"><input type="text" name="usernamelogin" placeholder="Prisijungimo vardas"></div>
                            <div class="loginItems"><input type="password" name="passwordlogin" placeholder="Slaptažodis"></div>
                            <div class="loginItems"><button class="button" type="submit" name="login">Prisijungti</button></div>
                          </form>
                          <div class="loginItems"><a href="signup.php"><button class="button">Registracija</button></a></div></div>';
    // jei prisijungęs adminas
} elseif ($_SESSION['u_username'] == 'admin') {
    echo '<div><form action="src/logout.php" method="post"><button class="button" type="submit" name="submit">Atsijungti</button></form><div><a href="zinutes.php" target="_blank"><button class="button">Visos žinutės</button></a></div><div><a href="rezervacijos.php" target="_blank"><button class="button">Visos rezervacijos</button></div></a></div>';
} else {
    // jei prisijungęs paprastas vartotojas
    echo '<form action="src/logout.php" method="post"><button class="button" type="submit" name="submit">Atsijungti</button></form><div><a href="user_rezervacijos.php" target="_blank"><button class="button">Rezervacijos</button></a></div>';
}
?>
           
        </div>
       
    </div>
    <div class="img">
        <nav>
            <div id="topMenu">
                <a href="index.php"><div class="menuButton">Pradžia</div></a>
                <a href="auto.php"><div class="menuButton">Automobiliai</div></a>
                <a href="rules.php"><div class="menuButton">D.U.K.</div></a>
                <a href="contact.php"><div class="menuButton">Kontaktai</div></a>
            </div>
        </nav>  
            <?php
if (isset($_SESSION['u_id'])) {
    echo '<form action="src/booking.php" method="post">
                <div id="reservationContainer">
                    <div class="reserveCell">
                        <div class="reservationTextAuto">Jūsų norimas automobilis:</div>
                        <div class="reservationInputAuto">
                            <select class="masina" name="masina">
                                <option value="Toyota Yaris">Toyota Yaris</option>
                                <option value="VW Polo">VW Polo</option>
                                <option value="Ford Mondeo">Ford Mondeo</option>
                                <option value="VW Jetta">VW Jetta</option>
                                <option value="BMW X5">BMW X5</option>
                                <option value="Subaru Legacy">Subaru Legacy</option>
                                <option value="BMW X3">BMW X3</option>
                            </select>
                        </div>
                    </div>
                    <div class="reserveCell">
                        <div class="reservationText">Rezervacijos pradžia:</div>
                        <div class="reservationInput"><input type="date" name="pradziaData"></div>
                        <div class="reservationInput"><input type="time" name="pradziaLaikas"></div>
                    </div>
                    <div class="reserveCell">
                        <div class="reservationText">Rezervacijos pabaiga:</div>
                        <div class="reservationInput"><input type="date" name="pabaigaData"></div>
                        <div class="reservationInput"><input type="time" name="pabaigaLaikas"></div>
                    </div>
                    <div class="reserveCell">
                        <div class="reservationText">Jūsų vardas</div>
                        <div class="reservationInput2"><input type="text" name="vardas"></div>
                        <div class="reservationText">Jūsų telefono nr.</div>
                        <div class="reservationInput2"><input type="tel" name="telefonas" pattern="[0-9]{9}" placeholder="86*******" maxlenght="9"></div>
                    </div>
                </div>
                <div>
                    <input type="submit" name="rezervuoti" value="Rezervuoti" class="submitButton">
                </div> 
            </form>';
} else {
    echo '<p id="textOnImage">Jei norite užsirezervuoti automobilį, užsiregistruokite puslapyje</p>';
}
?>
   </div>