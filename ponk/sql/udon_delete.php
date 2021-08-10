<?php
  $pdo = new PDO('mysql:host=localhost; dbname=men; charset=utf8', 'root', 'sato1987');
  $st = $pdo->prepare('DELETE FROM udon WHERE name=?');
  $st->execute(array($_GET['name']));
?>
レコードを削除しました。  