<?php
// 投稿フォームからのデータを取得
$message = $_POST['message'];
// $link = $_POST['link'];

// データの整形
$data = "$message\n";

// データをdata.txtに追記
file_put_contents('data/data.txt', $data, FILE_APPEND);

?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿完了 | いいね付メッセージ掲示板</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <style>
        a {
            color: red;
            text-decoration: none;
        }

        a:hover {
          opacity: 0.7;
        }

        body {
          margin:30px;
        }
    </style>
</head>

<body>
  <h1>投稿が完了しました！</h1>
    <ul>
      <li><a href="read.php">一覧を見る</a></li>
      <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
