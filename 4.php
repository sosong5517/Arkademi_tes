<?php 

$numLine=7;
for ($row=0; $row<$numLine; $row++)
{
  for ($column=0; $column<$numLine; $column++)
{
 if ($row==0||$row==$numLine-1 || $column==($numLine/2 -0.5  ))
            echo "* ";    
        else  
            echo "= ";     
}        
  echo "<br>";
}


?>