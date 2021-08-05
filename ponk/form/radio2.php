<?php
  $men = htmlspecialchars($_GET['men']);
  $animal = htmlspecialchars($_GET['animal']);
  echo "あなたの好きな麺類は{$men}ですね<br>";
  echo "あなたの好きな動物は{$animal}ですね<br>";
?>  