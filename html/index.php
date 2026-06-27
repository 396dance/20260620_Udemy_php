<?php

require_once __DIR__ . '/../function.php';

$questions = loadQuestionsFromCsv(__DIR__ . '/../data.csv');

// テンプレートのファイルを読み込む
include __DIR__ . '/../template/index.tmp.php';
