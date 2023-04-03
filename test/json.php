<?php

$computadora = [
  "CPU"     => "Interl Core i7"
  "RAM"     =>32,
  "STORAGE" =>["SSD", "HDD"],
  "VERSION" => 10
  "APPS"    =>["Office", "VSCode", "NetBeans", "XAMPP"]

];
//echo $computadora;
echo json_encode($computadora)