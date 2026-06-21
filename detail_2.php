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
  <h1>問題<?php echo $questions[2][0] ?></h1>
  <h2><?php echo $questions[2][1] ?></h2>
  <li>
    <ol><a href="" onclick="quizAnswer('a', '<?php echo $questions[2][6]; ?>');">a：<?php echo $questions[2][2] ?></a></ol>
    <ol><a href="" onclick="quizAnswer('b', '<?php echo $questions[2][6]; ?>');">b：<?php echo $questions[2][3] ?></a></ol>
    <ol><a href="" onclick="quizAnswer('c', '<?php echo $questions[2][6]; ?>');">c：<?php echo $questions[2][4] ?></a></ol>
    <ol><a href="" onclick="quizAnswer('d', '<?php echo $questions[2][6]; ?>');">d：<?php echo $questions[2][5] ?></a></ol>
  </li>
  <p>答え：<?php echo $questions[2][6] ?></p>
  <div>解説：<?php echo $questions[2][7] ?></div>
  <div><a href="./template/index.tmp.php">一覧へ戻る</a></div>
</body>

</html>