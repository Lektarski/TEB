<?php
function childName(){
  return 'Franek';
}

var_dump(childName());
echo "<br>";
var_dump(childName());
echo "<br>";
$childs = [
  ['id' => '1', 'name' => 'Franek'  ],
  ['id' => '2', 'name' => 'Jagoda'  ],
];

$validateChildName = array_map(function($child){
return $child;


}, $childs);
echo "<pre>";
print_r($validateChildName);
echo "<pre><hr>";

//----------------------------------------------------------

$multi = fn ($a, $b) => $a * $b;

var_dump($multi(4,5));
echo "<p>";
var_dump($multi(4.5,5));
echo "<p>";
//----------------------------------------------------------------

$fruits = [
['name' => 'apple', 'price' => 6 ],
['name' => 'lemon', 'price' => 10.5 ]
];
$sale = array_map(fn($fruit) => $fruit['name'], $fruits);
print_r($sale);


//---------------------------

//$user=null;
$user = ['name' => 'Franek, <p>'];
$result = fn() => trim($user) ? 'brak danych' : 'Witaj '. $user['name'];
print_r($result());



 ?>
