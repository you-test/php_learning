<?php

/* ---------------------------------------------------------------------
  投稿されていないときは投稿フォーム(t_post.php)を表示
  投稿されて、正常に書き込まれたときは記事一覧(index.php)を表示
  投稿されて、エラーがあるときは投稿フォーム(t_psot.php)に戻りエラーを表示
  ---------------------------------------------------------------------*/
  $error = $title = $content = '';
  if (@$_POST['submit']) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (!$title) $error .= 'タイトルがありません。<br>';
    if (mb_strlen($title) > 80) $error .= 'タイトルが長すぎます<br>';
    if (!$content) $error .= '本文がありません。<br>';
    if (!$error) {
      $pdo = new PDO('mysql:host=localhost; dbname=blog; charset=utf8', 'root', 'sato1987');
      //投稿は管理者のみできるという前提のためセキュリティーを考慮していない
      $st = $pdo->query("INSERT INTO post(title,content) VALUES('$title', '$content')");
      header('Location: index.php');
      exit();
    }
  }
  require 't_post.php';
?>  