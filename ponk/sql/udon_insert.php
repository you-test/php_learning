<?php
  $pdo = new PDO('mysql:host=localhost; dbname=men; charset=utf8', 'root', 'sato1987');
  $st = $pdo->prepare('INSERT INTO udon VALUES(?,?)');
  $st->execute(array($_POST['name'], $_POST['price']));
?>
レコードを追加しました。  