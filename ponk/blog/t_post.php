<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>投稿記事｜Special Blog</title>
  <link rel="stylesheet" href="blog.css">
</head>
<body>
  <form action="post.php" method="post">
    <div class="post">
      <h2>記事投稿</h2>
      <p>題名</p>
      <p><input type="text" name="title" size="40" value="<?php echo $title ?>"></p>
      <p>本文</p>
      <p><textarea name="content" cols="40" rows="8"><?php echo $content ?></textarea></p>
      <p><input type="submit" name="submit" value="投稿"></p>
      <p><?php echo $error ?></p>
    </div>
  </form>
</body>  
</html>