<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
  <h3>Użytkownicy</h3>
  <?php
require_once './scripts/connect.php';
$connect->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM users INNER JOIN cities ON users.city_id=cities.city_id;";
$result  = $connect->query($sql);

echo <<< TABLE
<table>
  <tr>
    <th>Id</th>
    <th>Imię</th>
<th>Nazwisko</th>
   <th>Data urodzenia</th>
   <th>Miasto</th>
</tr>



TABLE;


while ($row = $result->fetch_assoc()) {
  echo <<< USER
<tr>
<td>$row[id]</td>
<td>$row[name]</td>
<td>$row[surname]</td>
<td>$row[birthday]</td>
<td>$row[city]</td>
<td><a href="./scripts/delete.php?deleteId=$row[id]">Usuń</a></td>

</tr>

USER;
}
echo "</table>";
if (!empty($_SESSION['aRow']))
{
echo "Usunięto danych" . $_SESSION['aRow'];
unset($_SESSION['aRow']);



}


   ?>

  </body>
</html>
