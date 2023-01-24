<?php
$json = file_get_contents('config.json');
$jsonArray = json_decode($json, true);
$name = $jsonArray["Семиз"];
$name1 = $jsonArray["Вадим"];
$name2 = $jsonArray["Олегович"];
$date =  $jsonArray["19.07.2004"];
#echo($jsonArray["Вадим"]);
?>