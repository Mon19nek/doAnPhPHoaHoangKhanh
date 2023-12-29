<?php
    include('../lib/config.php');
    if ($_GET['idComplete']) {
      $id = $_GET['idComplete'];
      $s =  "UPDATE `order` SET `status` = '1' WHERE order.id = $id";
      $qr = $conn -> query($s);
      if ($qr) {
        header('Location: ./new.php');
      }
    }
?>