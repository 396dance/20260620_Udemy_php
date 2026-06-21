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
</head>

<body>
  <h1>問題<?php echo $questions[3][0] ?></h1>
  <h2><?php echo $questions[3][1] ?></h2>
  <li>
    <ol>a：<?php echo $questions[3][2] ?></ol>
    <ol>b：<?php echo $questions[3][3] ?></ol>
    <ol>c：<?php echo $questions[3][4] ?></ol>
    <ol>d：<?php echo $questions[3][5] ?></ol>
  </li>
  <p>答え：<?php echo $questions[3][6] ?></p>
  <div>解説：<?php echo $questions[3][7] ?></div>
  <div><a href="./template/index.tmp.php">一覧へ戻る</a></div>
</body>

</html>