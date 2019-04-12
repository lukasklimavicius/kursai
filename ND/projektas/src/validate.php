<?php 
    header("Content-Type: text/html; charset=utf-8");
?>
<?php 
// zinutes siuntimas el. pastu
    if (isset($_POST['submit'])) {
        $vardas = trim($_POST['vardasFormos']);
        $email = trim($_POST['emailFormos']);
        $zinute = trim($_POST['zinuteFormos']);

        if(!empty($vardas)&&!empty($email)&&!empty($zinute)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "info@autunuoma.lt";
                $subject = "Nauja žinute";
                $autorius = 'Nuo: ' . $vardas . ', ' . $email;
                $zinute = htmlspecialchars($zinute);
                mail($to, $subject, $autorius, $zinute, $from);
            }
        }
        include('db.php');
    }