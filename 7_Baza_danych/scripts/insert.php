<?php
  session_start();
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        $_SESSION['error'] = "<br>Wypełnij wszystkie pola w formularzu!<br>";
        echo "<script>history.back()</script>";
        exit();
      }
    }
    require_once './connect.php';
    $sql="INSERT INTO `users` (`id`, `city_id`, `name`, `surname`, `birthday`, `create_user`) VALUES (NULL, '$_POST[city_id]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";

    $connect->query($sql);

    if ($connect->affected_rows) {
      $_SESSION['error'] = "Prawidłowo dodano użytkownika";
    }
  }

  header("location: ../4_db_select_table_insert.php?addUser=");
 ?>
