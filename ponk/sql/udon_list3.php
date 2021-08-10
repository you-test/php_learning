<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <tr><th>名前</th><th>価格</th><th>操作</th></tr>

    <?php
      $pdo = new PDO('mysql:host=localhost; dbname=men; charset=utf8', 'root', 'sato1987');
      $st = $pdo->query('SELECT * FROM udon');
      while ($row = $st->fetch()) {
        $name = htmlspecialchars($row['name']);
        $price = htmlspecialchars($row['price']);
        echo "<tr><td>$name</td><td>$price 円</td><td><a href='udon_update.php?name=$name'>修正</a> <a href='udon_delete.php?name=$name' onclick='\"return confirm('削除してよろしいですか')\">削除</a></td></tr>";
      }
    ?>

  </table>
  
</body>
</html>