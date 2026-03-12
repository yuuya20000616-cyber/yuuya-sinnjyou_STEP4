<?php
  1,
  // 数字の配列を作成
  $numbers = array(3,1,4,1,5,9);

  2,
  // 配列の末尾に数字2を追加
  array_push($numbers,2);

  3,
  // 配列の2番目の要素を削除(インデックス1を指定)
  unset($numbers[1]);

  4,
  // 配列を昇順にソート
  sort($numbers);

  5,
  // 配列を出力
  print_r($numbers);
?>  