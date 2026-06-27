<?php

/** @var array $questions */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>クイズ一覧</h1>
  <?php foreach ($questions as $question) {
    // 一覧画面から渡ってきた変数(問題No)を格納する
    $quiz_number = $question[0];
    echo "<div><a href='../../template/detail_tmp.php?quiz_number={$quiz_number}'>問題$quiz_number<br></a></div>";
  } ?>

</body>

</html>