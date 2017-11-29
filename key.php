<?php


$count=1;

//arreglo de los valores aleatorios

$arr=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s",
	   "t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M",
	   "N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9");

$key='key'.$count.'.key';

//se verifica si el archivo ya existe, si existe entonces se hara hasta encontrar uno que no exista

while(file_exists($key)==true) {
	
	$count=$count+1;
	$key='key'.$count.'.key';
	
}

//se declara la variable de la clave y el valor random

$clave='';
$rand = 0;

//se ingresan los valores aleatorios dentro de la clave para generar el archivo key

for($i=0; $i<50; $i++){

	$rand=array_rand($arr, 1);
	

	$clave=$clave.$arr[$rand];

}

//se llama a la libreria para crear el archivo key e ingresar la clave

print("Se creo el archivo ".$key.'\n');
print($clave);

$Manejador=fopen($key,'w');
fwrite($Manejador,$clave);









?>