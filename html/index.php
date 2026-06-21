<?php

$fp = fopen("../data.csv", "r");
// クイズの問題の情報一覧をを保存する入れ物を用意
$questions = [];

// while文でCSVファイルのデータを1つずつ繰り返し読み込む
while($data = fgetcsv($fp,escape: "\\")){
    // クイズの問題を配列に追加する
    $questions[] = $data;
}

fclose($fp);

// テンプレートのファイルを読み込む
include __DIR__ . '/../template/index.tmp.php';