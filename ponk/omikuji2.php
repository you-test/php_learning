<?php
  $num = rand(0,3);
  if ($num == 0) {
    echo "今日の運勢は大吉です。";
  } elseif ($num == 1) {
    echo "今日の運勢は中吉です。";
  } elseif ($num == 2) {
    echo "今日の運勢は凶";
  }
?>  