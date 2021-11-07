<?php
session_start();

if (!empty($_GET['deleteId'])) {
  require_once './connect.php';
  $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[deleteId];";
$result = $connect->query($sql);
$_SESSION['aRow'] = $connect->affected_rows;
}
  header('location: ../3_db_select_table_delete.php');

 ?>
