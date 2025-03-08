<?php
//imprimir
echo "Konnichiwa! Kore wa watashi no U~ebupēji desu!";
echo '<br>'; //imprimir salto de linea
echo "Konnichiwa! Kore wa watashi no U~ebupēji desu!";

//creacion de variables
$name = 'Lina';
$lastname = "Ramos";
$age = 18; 
$height = 1.75;
$legalage = true; 
$test = null;


//concatenacion con .
echo '<br> Hi ' . $name . ' ' . $lastname;

//Concatenacion con comilla doble 
echo "<br> Hi $name $lastname";

//Array ordenada
$testing = array(1,2,3,4,5); //array ordenado lista flexible o [[],2,3,true,5]
echo '<br>' . $testing[1]; //posision desde 0,1,2,3

//Array no ordenada con claves
$person = [
    "namep" => "Sergio",
    "lastnamep" => "Ramos",
    "agep" => 20,
    "luckynumberp"=> 11,
];
echo '<br>' . $person['namep'];

?>