<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/input.css">
    <title>いいね付メッセージ掲示板</title>
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

</head>

<body>
  <h1>いいね付メッセージ掲示板</h1>
  <form action="write.php" method="post">
      <label>
        <span class="label">メッセージ</span>
        <textarea class="box" name="message" rows="4" cols="50"></textarea>
      </label>
      <div class="submitBox">
        <input class="submit" type="submit" value="送信">
      </div>
  </form>
  <ul>
    <li><a href="read.php">一覧へ</a></li>
  </ul>
</body>

</html>
