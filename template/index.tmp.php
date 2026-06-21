<?php
// 1. まずは自分でCSVを読み込んでデータを準備する
$fp = fopen(__DIR__ . "/../data.csv", "r"); 
$questions = [];
while($data = fgetcsv($fp, escape: "\\")){
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
  <h1>クイズ一覧</h1>
  <?php $questions[0] ?>
    <div><a href='../detail_1.php'>問題1</a></div>
    <div><a href='../detail_2.php'>問題2</a></div>
    <div><a href='../detail_3.php'>問題3</a></div>
    <div><a href='../detail_4.php'>問題4</a></div>
</body>
</html>