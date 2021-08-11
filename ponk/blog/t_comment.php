<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>コメント投稿｜Special Blog</title>
  <link rel="stylesheet" href="blog.css">
</head>
<body>
  <form action="comment.php" method="post">
    <div class="post">
      <h2>コメント投稿</h2>
      <p>お名前</p>
      <p><input type="text" name="name" size="40" value="<?php echo $name ?>"></p>
      <p>コメント</p>
      <p><textarea name="content" cols="40" rows="8"><?php echo $content ?></textarea></p>
      <p>
        <input type="hidden" name="post_no" value="<?php echo $post_no ?>">
        <input type="submit" value="投稿" name="submit">
      </p>
      <p><?php echo $error ?></p>
    </div>
  </form>
</body>
</html>