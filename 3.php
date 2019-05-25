<?php
$kalimat = "Sasoono luhur pambudhi ";
echo "huruf hidupnya ada  <strong>".preg_match_all('/[aeiou]/i',$kalimat,$matches)." buah </strong> yang terdapat pada kalimat  <strong>".$kalimat."</strong>";
?>