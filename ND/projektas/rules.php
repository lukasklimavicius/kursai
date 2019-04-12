<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobilių nuoma</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
    <style>
        .question1, .question2, .question3, .question4, .question5 {
            cursor: pointer;
            padding: 10px 0 0 30px;
            font-size: 19px;
        }
        .answer1, .answer2, .answer3, .answer4, .answer5  {
            display: none;
            padding: 5px 0 0 30px;
        }
    </style>
</head>

<body>
    <?php
        include('content/header.php');
    ?>
<!--   Išvažiuojantys atsakymai į klausimus -->
    <div class="baltaJuosta"></div>
    <p class="pageTitle">Dažniausiai užduodami klausimai</p>
    <br>
    <div class="question1"><img src="images/question.png" alt="question" style="float:left; padding-right: 5px;"><span style="line-height: 32px; ">Ar mūsų automobiliai apdrausti?</span></div>
    
    <div class="answer1">Visi UAB "Autonuoma" automobiliai yra apdrausti privalomuoju Civilinės atsakomybės ir Kasko draudimu, todėl rūpintis draudimu Jums nereikia. Automobilyje yra sumontuota draudiko reikalavimus atitinkanti, su palydovu susieta saugumo sistema, kuri apsaugos automobilį nuo galimų vagysčių.</div>
    <div class="question2"><img src="images/question.png" alt="question" style="float:left; padding-right: 5px"><span style="line-height: 32px; ">Kaip atsiskaityti už automobilio nuomą?</span></div>
    <p class="answer2">Atsiskaityti galite bankiniu pavedimu arba grynais atvykus pasiimti automobilio.</p>
    <div class="question3"><img src="images/question.png" alt="question" style="float:left; padding-right: 5px"><span style="line-height: 32px; ">Ką daryti jei apgadinau automobilį?</span></div>
    <p class="answer3">Praneškite mums telefonu +370 612 34567 ir mes jums pagelbėsime! Kiekvieną atvejį įvertinam individualiai, ir jeigu pažeidimai yra labai smulkūs bei automobiliu galima toliau saugiai važiuoti - sutartyje nustatyto frančizės mokesčio mokėti nereikia. Kam gi nepasitaiko?</p>
    <div class="question4"><img src="images/question.png" alt="question" style="float:left; padding-right: 5px"><span style="line-height: 32px; ">Ar galima automobilyje vežti gyvūnus?</span></div>
    <p class="answer4">Augintinį automobilyje galima vežtis tik specialiai tam skirtoje gyvūno transportavimo dėžėje.</p>
    <div class="question5"><img src="images/question.png" alt="question" style="float:left; padding-right: 5px"><span style="line-height: 32px; ">Ar automobilyje galima rūkyti?</span></div>
    <p class="answer5">Mūsų automobiliuose rūkyti draudžiama.</p>
    <div class="baltaJuosta"></div>
    <?php
        include('content/footer.php');
    ?>
<!--    aprašyta kaip veikti -->
    <script>
        $(document).ready(function() {
            $(".question1").click(function() {
                $(".answer1").fadeToggle("slow");
                     });
            $(".question2").click(function() {
                $(".answer2").fadeToggle("slow");
                     });
            $(".question3").click(function() {
                $(".answer3").fadeToggle("slow");
                     });
            $(".question4").click(function() {
                $(".answer4").fadeToggle("slow");
                     });
            $(".question5").click(function() {
                $(".answer5").fadeToggle("slow");
                     });
        });
    </script>
</body>
    
</html>