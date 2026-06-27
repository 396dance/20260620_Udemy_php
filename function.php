<?php

function loadQuestionsFromCsv(string $csvPath): array
{
  $fp = fopen($csvPath, 'r');
  if ($fp === false) {
    return [];
  }

  $questions = [];
  while ($data = fgetcsv($fp, escape: "\\")) {
    $questions[] = $data;
  }

  fclose($fp);

  array_shift($questions);

  return $questions;
}
