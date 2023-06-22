<?php
  // data.txtの内容を読み込み
  $data = file_get_contents('data/data.txt');
  $message = explode("\n", $data);

  // data_like.txtを読み込み
  $data_like = file_get_contents('data/data_like.txt');
  $likes = json_decode($data_like, true);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/read.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
  <title>メッセージ一覧 | いいね付メッセージ掲示板</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/read.js"></script>
</head>

<body>
  <h1>メッセージ一覧</h1>

  <ul>
    <li><a href="input.php">戻る</a></li><br>
    <li>　気に入ったメッセージには❤︎を押そう！</li>
  </ul>

  <div id="boxroll">
    
      <?php
        // インデックスを作成
        $indexes = array_keys($message);

        // $likesの値に基づいて$indexesをソート
        usort($indexes, function($a, $b) use ($likes) {
            return ($likes[$b] ?? 0) - ($likes[$a] ?? 0);
        });

        foreach ($indexes as $index) {
            $currentMessage = $message[$index];
            $likeCount = isset($likes[$index]) ? $likes[$index] : 0;
            if (!empty($currentMessage)) {
                echo '<div class="post"><p>'. $currentMessage . '</p><button class="likeBtn" data-index="' . $index . '">❤︎ <span class="count">' . $likeCount . '</span></button></div>';
            }
        }

        // foreach ($message as $index => $message) {
        //     $likeCount = isset($likes[$index]) ? $likes[$index] : 0;
        //     if (!empty($message)) {
        //     echo '<div class="post"><p>'. $message . '</p><button class="likeBtn" data-index="' . $index . '">❤︎ <span class="count">' . $likeCount . '</span></button></div>';
        //     }
        // }
      ?>
    
  </div>
</body>
</html>
