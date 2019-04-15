<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto nuoma</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id="headerContainer">
        <div style="flex-grow: 1;">
    <!--        logo-->
           <a href="index.php"><img src="images/logo1.png" alt="logo" width="200px"></a>
        </div>
        
        <div style="flex-grow: 3;">
            <img src="images/phone.png">
            <span class="headIconText">Skambinkite mums: +370 612 34567</span>
            <br>
            <img src="images/place.png">
            <span class="headIconText">Adresas: Vilniaus g. 1, Vilnius</span>
        </div>
        <div class="loginArea" style="flex-grow: 6;">
<!--            jei vartotojas prisijungęs jam galima atsijungti-->
            <?php
if (isset($_SESSION['u_id'])) {
    echo '<form action="src/logout.php" method="post"><button class="button" type="submit" name="submit">Atsijungti</button></form>';
    
} else
// jei neprisijungęs, jam rodoma prisijungimo forma
    {
    echo '<div><form action="src/validatelogin.php" method="post">
                            <div class="loginItems"><input type="text" name="usernamelogin" placeholder="Prisijungimo vardas"></div>
                            <div class="loginItems"><input type="password" name="passwordlogin" placeholder="Slaptažodis"></div>
                            <div class="loginItems"><button class="button" type="submit" name="login">Prisijungti</button></div>
                          </form>
                          <div class="loginItems"><a href="signup.php"><button class="button">Registracija</button></a></div></div>';
}
?>
           
        </div>
       
    </div>
    <div class="img">
        <nav>
<!--            meniu mygtukai -->
            <div id="topMenu">
                <a href="index.php"><div class="menuButton">Pradžia</div></a>
                <a href="auto.php"><div class="menuButton">Automobiliai</div></a>
                <a href="rules.php"><div class="menuButton">D.U.K.</div></a>
                <a href="about.php"><div class="menuButton">Apie mus</div></a>
                <a href="contact.php"><div class="menuButton">Kontaktai</div></a>
            </div>
        </nav>  
        <br>
<!--        registracijos forma -->
             <div class="registrationContainer">
        <span class="pageTitle">Registracijos forma</span>
        <form class="registerForm" action="src/signupdb.php" method="post">
            <input class="registerInputs" type="text" name="username" placeholder="Vartotojo vardas"><br>
            <input class="registerInputs" type="text" name="emailas" placeholder="El. paštas"><br>
            <input class="registerInputs" type="password" name="password" placeholder="Slaptažodis"><br>
            <button type="submit" name="register" class="submitFormButton registerButton">Registruotis</button>
        </form>
    </div>
            
    </div>
    
   
    <div class="baltaJuosta"></div>
    <?php
include('content/footer.php');
?>
   