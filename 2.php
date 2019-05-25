<?php 
$date_from = "2010-02-03";   
$date_from = strtotime($date_from);
  

$date_to = "2010-09-10";  
$date_to = strtotime($date_to); 
  

for ($i=$date_from; $i<=$date_to; $i+=86400) {  
    echo date("Y-m-d", $i).'<br />';  
}  


?>