<?php
  $pdo = new PDO('mysql:host=localhost; dbname=men; charset=utf8', 'root', 'sato1987');
  $st = $pdo->prepare("UPDATE udon SET name=?,price=? WHERE name=?");
  $st->execute(array($_POST['name'], $_POST['price'], $_POST['old_name']));
?>
レコードを更新しました。  