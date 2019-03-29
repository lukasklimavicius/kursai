<?php
    class Zmogus {
        public $vardas;
        public $pavarde;

    public function pasisveikinimas() {
        echo 'Labas ' . $this -> vardas . ' ' . $this ->pavarde . '<br>';
    }
}
$zmogus1 = new Zmogus();
$zmogus2 = new Zmogus();

$zmogus1 -> vardas = "Jonas";
$zmogus1 -> pavarde = "Jonaitis";

$zmogus2 -> vardas = "Petras";
$zmogus2 -> pavarde = "Petraitis";

echo $zmogus1 -> pasisveikinimas();
echo $zmogus2 -> pasisveikinimas();
?>
