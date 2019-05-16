<?php
    $arr = array('XOOO',
 'XOXO',
 'XOXO',
 'OOXX',
 'OOOO');
    $str = implode("", $arr);
    $counter = 0;
    $bendros_sienos = 0;
    $ilgis = strlen($arr[0]);
    for ($i=0; $i<(strlen($str))-2; $i++) {
       if ($str[$i]=='X') {
           $counter++;
       $j=$i;
       if ($j<(strlen($str)-$ilgis-1)) {
          if ($str[$j]==$str[$j+1] || $str[$j]==$str[$j+$ilgis]) {
                $bendros_sienos++;
          } 
       } elseif ($str[$j]==$str[$j+1]) {
           $bendros_sienos++;
       }
           }
       } 
    $ats=($counter*4)-($bendros_sienos*2);
    echo "Perimetras lygus: $ats";
?>
