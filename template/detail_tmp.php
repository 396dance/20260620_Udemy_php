<?php

require_once __DIR__ . '/../function.php';

$questions = loadQuestionsFromCsv(__DIR__ . '/../data.csv');

// URLパラメータから 'quiz_number' を取得する
// （念のため、値が存在するか確認してから変数に代入します）
$quiz_number = $_GET['quiz_number'] ?? null;

// 文字列の '1' を数値の 1 に直して、配列のインデックス（0から始まる）に合わせる
$index = (int)$quiz_number - 1;

$quiz_number = $questions[$index][0];
$question = $questions[$index][1];
$answer_a = $questions[$index][2];
$answer_b = $questions[$index][3];
$answer_c = $questions[$index][4];
$answer_d = $questions[$index][5];
$current_answer = $questions[$index][6];
$explanation = $questions[$index][7];

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
  <h1>問題<?php echo $quiz_number ?></h1>
  <h2><?php echo $question ?></h2>
  <ui>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('a', '<?php echo $current_answer; ?>');return false;" style="display: block;">a：<?php echo $answer_a ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('b', '<?php echo $current_answer; ?>');return false;" style="display: block;">b：<?php echo $answer_b ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('c', '<?php echo $current_answer; ?>');return false;" style="display: block;">c：<?php echo $answer_c ?></a></ol>
    <ol style="list-style: none; padding: 0; margin-bottom: 10px;"><a href="" onclick="quizAnswer('d', '<?php echo $current_answer; ?>');return false;" style="display: block;">d：<?php echo $answer_d ?></a></ol>
  </ui>
  <div id="answerArea" style="display: none;">
    <p>答え：<?php echo $current_answer ?></p>
    <div>解説：<?php echo $explanation ?></div>
  </div>
  <div><a href="../html/index.php">一覧へ戻る</a></div>
</body>

</html>