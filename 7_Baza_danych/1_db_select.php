<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
  <h3>Użytkownicy</h3>
  <?php
$connect= new mysqli("localhost", "root", "", "teb"); //3 to hasło
$connect->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM users INNER JOIN cities ON users.city_id=cities.city_id;";
$result  = $connect->query($sql);
//$row = $result->fetch_assoc();
//print_r($row);
//echo $row['name'];
while ($row = $result->fetch_assoc()) {
  echo <<< USER
ID: $row[id]<br><p>
  Imię i Nazwisko: $row[name] $row[surname]<br><p>
  Data urodzenia $row[birthday]<br><p>
  Miasto $row[city]<br><p>



<hr>

USER;
}




   ?>
  </body>
</html>
