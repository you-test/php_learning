<?php
  $weeks = array('日','月','火','水','木','金','土');
  //現在日時
  $now = time();
  //現在の年月と日数
  $y = date('Y', $now);
  $m = date('n', $now);
  $last = date('t', $now);

  echo "<h1>{$y}年{$m}月のカレンダー</h1>";

  for ($d = 1; $d <= $last; $d++) {
    $t = mktime(0,0,0,$m,$d,$y);
    //曜日
    $w = date('w', $t);
    echo "{$d}日({$weeks[$w]})";
  }
?>  