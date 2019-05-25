<?php 
function name()
{
	$name="sasono luhur pambudhi";
	return json_encode($name);
};
echo name();


function address (){
	$address=" JL. Dr. Djunjunan Dalam, No. 2 RT. 02/03, Pajajaran, Kec. Cicendo, Kota Bandung, Jawa Barat 40173";
	return json_encode($address);
};
echo address();

function hobbies(){
	$hobbies = array("basket","coding","membaca");
		return json_encode($hobbies);
};
function is_married(){
	$menikah="belum";
$is_maried= false;
if ($menikah="sudah") {

	$is_maried= true; 
}
};
echo is_married();



function skils (){
	$skils = array(
	'php' => 80,
	'javasript' => 60,
	' php_my_sql' => 80,
	'office' => 95
);
	// foreach ($my_skils as $skils) {
 return  json_encode($skils);
			// }
};
echo skils();
?>