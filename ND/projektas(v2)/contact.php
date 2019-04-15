<?php  
    require __DIR__ . '/src/validate.php'; 
?>
<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto nuoma</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    
</head>
    <body>
    <?php
        include('content/header.php');
    ?>
    <div class="baltaJuosta"></div>
    <div>
       <fieldset>
            <div class="formContainer">
<!--                pavadinimas-->
                <div>
                    <p class="contactPageTitle">Jei turite klausimų, užpildykite žemiau esančią formą ir su Jumis bus susisiekta.</p>
                </div>

                <div>
<!--                    paspaudus siųsti kas vyksta-->
                    <?php            
                    if (isset($_POST['submit'])) {
                            echo "<p class='gautaZinute'>Jūsų žinutė buvo gauta!</p>";
                    }
                    ?>
                    <!--                PATI FORMA -->
                    <form id="contactForm" action="contact.php" method="post">
                        <p class="formCell"><input class="contactInput" type="text" name="vardasFormos" placeholder="Jūsų vardas" required autofocus></p>
                        <p class="formCell"><input class="contactInput" type="email" name="emailFormos" placeholder="Jūsų el. pašto adresas" required></p>
                        <p class="formCell contactInput"><textarea placeholder="Jūsų žinutė mums" name="zinuteFormos" required></textarea></p>
                        <button name="submit" type="submit" class="submitFormButton">Siųsti žinutę</button>
                    </form> 
                </div>
            </div>
        </fieldset>
    </div>
    <?php
        include('content/footer.php');
    ?>
    <?php
        // zinutes idejimas i DB ir siuntimas email
        include_once 'src/validate.php';            
    ?>
</body>
    
</html>