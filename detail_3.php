<?php
// 1. まずは自分でCSVを読み込んでデータを準備する
$fp = fopen(__DIR__ . "/data.csv", "r");
$questions = [];
while ($data = fgetcsv($fp, escape: "\\")) {
  $questions[] = $data;
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="./script.js" defer></script>
</head>

<body>
  <h1>問題<?php echo $questions[3][0] ?></h1>
  <h2><?php echo $questions[3][1] ?></h2>
  <li>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('a', '<?php echo $questions[3][6]; ?>');return false;" style="display: block;">a：<?php echo $questions[3][2] ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('b', '<?php echo $questions[3][6]; ?>');return false;" style="display: block;">b：<?php echo $questions[3][3] ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('c', '<?php echo $questions[3][6]; ?>');return false;" style="display: block;">c：<?php echo $questions[3][4] ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('d', '<?php echo $questions[3][6]; ?>');return false;" style="display: block;">d：<?php echo $questions[3][5] ?></a></ol>
  </li>
  <div id="answerArea" style="display: none;">
    <p>答え：<?php echo $questions[3][6] ?></p>
    <div>解説：<?php echo $questions[3][7] ?></div>
  </div>
  <div><a href="./template/index.tmp.php">一覧へ戻る</a></div>
</body>

</html>