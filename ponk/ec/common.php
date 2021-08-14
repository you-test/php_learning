<?php
  session_start();

  function connect() {
    return new PDO('mysql:host=localhost; dbname=shop; charset=utf8', 'root', 'sato1987');
  }

  function img_tag($code) {
    if (file_exists('images/$code.jpg')) $name = $code;
    else $name = 'noimage';
    return '<img src="images/' . $name . '.jpg" alt="">';
  }
?>  