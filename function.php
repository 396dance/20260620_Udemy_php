<?php

$fp = fopen("./data.csv", "r");

// テーブルタグを作成し、テーブルヘッダーで見出しを作る
echo '<table border="1">
      <tr>
      <th>ID</th>
      <th>問題文</th>
      <th>選択肢A</th>
      <th>選択肢B</th>
      <th>選択肢C</th>
      <th>選択肢D</th>
      <th>答え</th>
      <th>解説</th>
      </tr>';
 
// while文でCSVファイルのデータを1つずつ繰り返し読み込む
while($data = fgetcsv($fp,escape: "\\")){
 
  // テーブルセルに配列の値を格納
  echo '<tr>';
  echo '<td>'.$data[0].'</td>';
  echo '<td>'.$data[1].'</td>';
  echo '<td>'.$data[2].'</td>';
  echo '<td>'.$data[3].'</td>';
  echo '<td>'.$data[4].'</td>';
  echo '<td>'.$data[5].'</td>';
  echo '<td>'.$data[6].'</td>';
  echo '<td>'.$data[7].'</td>';
  echo '</tr>';
}
 
// テーブルの閉じタグ
echo '</table>';

fclose($fp);
?>

