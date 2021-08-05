<?php
  if (move_uploaded_file($_FILES['pic']['tmp_name'], 'upload.jpg')) {
    echo '<img src="upload.jpg" alt="">';
  } else {
    echo "ファイルを選択してください";
  }
?>  