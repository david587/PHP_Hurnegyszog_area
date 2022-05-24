<?php
echo file_get_contents("templates/head.html");
$page= file_get_contents("templates/calc.html");

function calcArea($aside,$bside,$cside,$dside){
    $s= ($aside+$bside+$cside+$dside)/2;
    $area= sqrt(
            ($s-$aside)*
            ($s-$bside)*
            ($s-$cside)*
            ($s.$dside)
            );
            return $area;
}
if(!empty($_GET["aside"]) and
   !empty($_GET["bside"]) and
   !empty($_GET["cside"]) and
   !empty($_GET["dside"]) ){

    $aside = $_GET["aside"];
    $bside = $_GET["bside"];
    $cside = $_GET["cside"];
    $dside = $_GET["dside"];
    $area= calcArea($aside,$bside,$cside,$dside);
}else{
    $area="Hiba! Helytelen bemenő adatok";
}





$page=str_replace("{{ result }}",$area,$page);
echo $page;
echo file_get_contents("templates/foot.html");
