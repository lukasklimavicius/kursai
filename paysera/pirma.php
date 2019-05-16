<?php
    $rezultatai = array("3:1", "2:2", "0:1", "0:3", "1:3", "2:0", "2:1", "0:0", "1:0", "3:1");
    function taskuSkaiciavimas ($rezultatai) {
        $str = implode("", $rezultatai);
        $taskai = 0;
        $kiek = (count($rezultatai)-1)*3;
        for ($i=0; $i<=$kiek; $i+=3) {
            $j=$i;
            if ($str[$j]>$str[$j+2]) {
                $taskai+=3;
            } elseif ($str[$j]==$str[$j+2]) {
                $taskai+=1;
            }
        }
        echo "Taškų suma: $taskai";
    }
    taskuSkaiciavimas($rezultatai);
?>
