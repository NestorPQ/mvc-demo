<?php

//Array (arreglo) msa sencillo
$platos = ["Ceviche","Arroz con pollo","Carapulcra","Ají de Gallina","Lomo Saltado"]
echo $platos[0];
// echo $platos[1];

$amigos = array ["Osito","Chavo del 8","Stuart Little","Lana Rhoades","Jhon Francia"]
echo $amigos[1]; //Segundo

//Array MULTI dimensional
$aplicaciones =[
  ["Photoshop", "Corel Draw", "Premier", "Muse"],
  ["VSCode", "Xampp", "NetBeans","Erwin", "Notepad++"],
  ["Excel","SAP","AutoCAD", "PowerBI", "Project"]
];

//Obtener VSCode
echo $aplicaciones[1][0]; //1= indice arreglo, 0= indice

//Obtener VSCode
echo $aplicaciones[0][3];

//Obtener SAP
echo $aplicaciones[2][1];

//Hasta aqui, cualquier de los arreglos anteriores
//ARREGLOS ASOCIATIVOS .. KEY => VALUE
$datosPersonales = [
  "apellidos"     => "Huamán Espinoza",
  "nombres"       =>"Peter Yair",
  "especialidad"  =>"Ingenieria de Software con IA",
  "email"         =>"peteryairhuamanespinoza@gmail.com",
  "edad"          =>38,
  "estaCasado"    =>true 
  "peliculas"     =>["EndGame", "Pinocho", "IronMan"]
];

//Obtener la especialidad
echo $datosPersonales["especialidad"];

//Obtener la primera de tus peliculas favoritas
echo $datosPersonales["peliculas"][0];