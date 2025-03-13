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

$numeros = [1,2,3,4,5,6,7,8,9,10,11,12];
//for
for($i=0;$i<12;$i++){
    $parOimpar = "";
    if (($numeros[$i]%2) ==0){
        $parOimpar = "Par";
    }else{
        $parOimpar="Impar";
    }

    echo "<br>$numeros[$i] es $parOimpar";
}

//while
$i=0;
$estado =true;
while($estado){
    if ($i==1){
        $i++;
        continue;//salta solo una vez y sigue
    }
    $parOimpar = "";
    if (($numeros[$i]%2) ==0){
        $parOimpar = "Par";
    }else{
        $parOimpar="Impar";
    }
    echo "<br>$numeros[$i] es $parOimpar";
    $i++;
    if($i==12){
        $estado = false;
    }
}
//break romper todo el ciclo
//continue salta la instrucción

//do while primero ejecuta y despues pregunta
$i=0;
do{
    $parOimpar = "";
    if (($numeros[$i]%2) ==0){
        $parOimpar = "Par";
    }else{
        $parOimpar="Impar";
    }
    echo "<br>$numeros[$i] es $parOimpar";
    $i++;
}while ($i < 12);

//foreach tomar el array darle el valor de lo que haya
foreach($numeros as $n){
    $parOimpar="";
    if(($n%2)== 0){
        $parOimpar = "Par";
    }else{
        $parOimpar="Impar";
    }
    echo "<br>$n es $parOimpar";
    }


foreach($numeros as $i => $n){
    $parOimpar="";
    if(($n%2)== 0){
        $parOimpar = "Par";
    }else{
        $parOimpar="Impar";
    }
    echo "<br>$n es $parOimpar";
}

/**
 * && and
 * || or¨
 * ! negation
 * mayor que
 * menor que
 * != diferente
 * == igual que
 * 
 * 
 */

 $catg = 'a';
 switch($catg){
    case 'a':
        //////
        break;
    case 'b':
        //////
        break;
 }
 
 echo '<br>'; 

function saludar($nombre){
    echo "Hola $nombre";
}

saludar ("Pepe");

function getSaludo($nombre){
    return "<br> Hola $nombre";
}

echo getSaludo("Ana");

function saludardos (string $nombre,$apellido){
    echo "<br> Hola $nombre $apellido";
}

saludardos("Sergio", "Ramos");


function saludartres($nombre, $apellido = null)
{
    echo "<br> Hola $nombre $apellido";
}   

saludartres("Ana","Gomez");
saludartres("Ana");


function saludarCuatro(...$args){
    $nombre = $args[0];
    $apellido = empty($args[1])? '' : $args[1];
    //si al revisar apellido es empty o no corresponde pasa a ser vacia ´´
    //if que ejecuta si es true o si es false
}
//... los tres puntos permiten agregar tantas cosas se necesiten como un array
saludarCuatro("Pedro");
saludarCuatro('pao',"Pico", 123, [0,1,2], true);

echo '<br>'; 

define("MICONSTANTE","Prueba");
echo MICONSTANTE;


//nOMOREPLZ

//CLASES
class Persona{
    //propiedades
    private $nombre=null;
    private $apellido;
    //metodos
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($val){
        $this->nombre = $val;
    }
    function getApellido(){
        return $this->apellido;
    }
    function setApellido($val2){
        $this->apellido = $val2;
    }
}

$persona = new Persona();
$persona->setNombre("Sergio");
echo "<br>".$persona->getNombre();

$persona->setApellido("Ramos");
echo "<br>".$persona->getApellido();
 

?>

