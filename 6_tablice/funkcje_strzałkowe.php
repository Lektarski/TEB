<h4> Funckje strzałkowe </h4>
<?php

function cube($n)
{
return ($n * $n * $n);
  }

$age=[1, 2, 3];
$b = array_map('cube' , $age);
print_r($b);

function validateName($name)
{
  return ucfirst(strtolower(trim($name)));
  }

  $names=["JanuSZ", "agnIEszKA", "miCHał"];
  $validateNames=array_map('validateName', $names);
  print_r($names);
echo '<br>';
  print_r($validateNames);
echo '<br>';

//------------------------------------------------------------------ Funkcja A.... coś tam xd

$salary=[3500, 7700, 2800, 12000];
$salaryIncrease=array_map(function($salary){
  return $salary*1.15;
}, $salary);
print_r($salary);
echo '<br>';
print_r($salaryIncrease);


//---------------------------------------------------------------------- Funkcja Strzałkowa


$salary=[3500, 7700, 2800, 12000];
$salaryIncrease=array_map(fn($salary):float=>$salary*1.15, $salary);
print_r($salary);
echo '<br>';
print_r($salaryIncrease);

//----------------------------------------------------------------------------

$name= 'Franek';

$text= function($name){
return"Imię: ". $name;
}
var_dump($text)
 ?>
