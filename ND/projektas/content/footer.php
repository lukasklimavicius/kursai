<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
    
</head>

<body>
</body>
</html>
 
<footer>
        <div class="footerContainer">
            <div class="contactMenu">
                <div class="cell">UAB "Automobilių nuoma"</div>
                <div class="table">
                    <div class="row">
                        <div class="cell">Įmonės kodas:</div>
                        <div class="cell">305894460</div>
                    </div>
                    <div class="row">
                        <div class="cell"><span>Adresas:</span></div> 
                        <div class="cell"><span>Vilniaus g. 1, Vilnius</span></div>
                    </div>
                    <div class="row">
                        <div class="cell"><span>Telefonas:</span></div> 
                        <div class="cell"><span>+370 612 34567</span></div>
                    </div>
                    <div class="row">
                        <div class="cell"><span>El. paštas:</span></div> 
                        <div class="cell"><span>info@autonuoma.lt</span></div>
                    </div>
                </div>
            </div>          
            <div class="contactMenu">
                <div class="table">
                    <div class="row">
                        <div class="cell"><span class="iconText">Bendraukite su mumis Facebook:</span></div>
                        <div class="cell"><a href="http://www.facebook.com" target="_blank"><img src="images/FaceBook-icon.png" alt="fb logo"></a></div>
                    </div>  
                    <div class="row">
                        <div class="cell"><span class="iconText">Stebėkite mus Twitter:</span></div>
                        <div class="cell"><a href="http://www.twitter.com" target="_blank"><img src="images/twitter-icon.png" alt="twitter logo"></a></div>
                    </div>  
                    <div class="row">
                        <div class="cell"><span class="iconText">Žiūrėkite mus Youtube:</span></div>
                        <div class="cell"><a href="http://www.youtube.com" target="_blank"><img src="images/Youtube-icon.png" alt="youtube logo"></a></div>
                    </div>  
                </div>
            </div>
        </div>
<!--    cookie set ir kad dingtų lentelė-->
        <script>
             $(document).ready(function() {
                 $("#sutinkuButton").click(function(){
                    document.cookie = "sutikimas=taip";
                    $('.cookies').hide();
                 });
             });
          </script>
          <?php if(isset($_COOKIE["sutikimas"])) {
        echo "";
    } else {
        echo "<div class='cookies'>
        <p class='cookiesText'>Informuojame, kad šioje svetainėje naudojami slapukai (angl. cookies). Sutikdami, paspauskite mygtuką „Sutinku“ arba naršykite toliau. Savo duotą sutikimą bet kada galėsite atšaukti pakeisdami savo interneto naršyklės nustatymus ir ištrindami įrašytus slapukus.</p><button id='sutinkuButton' class='button'>Sutinku</button></div>";
    }
    ?>
    
    </footer>
