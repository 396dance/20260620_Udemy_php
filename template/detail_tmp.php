<?php

// まずは自分でCSVを読み込んでデータを準備する
$fp = fopen(__DIR__ . "/../data.csv", "r");
$questions = [];
while ($data = fgetcsv($fp, escape: "\\")) {
  $questions[] = $data;
}
fclose($fp);

// CSVファイルの一行目を除外する
array_shift($questions);

// URLパラメータから 'quiz_number' を取得する
// （念のため、値が存在するか確認してから変数に代入します）
$quiz_number = $_GET['quiz_number'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <script src="../script.js" defer></script>
</head>

<body>
  <h1>問題<?php echo $questions[$quiz_number][0] ?></h1>
  <h2><?php echo $questions[$quiz_number][1] ?></h2>
  <li>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('a', '<?php echo $questions[$quiz_number][6]; ?>');return false;" style="display: block;">a：<?php echo $questions[$quiz_number][2] ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('b', '<?php echo $questions[$quiz_number][6]; ?>');return false;" style="display: block;">b：<?php echo $questions[$quiz_number][3] ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('c', '<?php echo $questions[$quiz_number][6]; ?>');return false;" style="display: block;">c：<?php echo $questions[$quiz_number][4] ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('d', '<?php echo $questions[$quiz_number][6]; ?>');return false;" style="display: block;">d：<?php echo $questions[$quiz_number][5] ?></a></ol>
  </li>
  <div id="answerArea" style="display: none;">
    <p>答え：<?php echo $questions[$quiz_number][6] ?></p>
    <div>解説：<?php echo $questions[$quiz_number][7] ?></div>
  </div>
  <div><a href="../html/index.php">一覧へ戻る</a></div>
</body>

</html>