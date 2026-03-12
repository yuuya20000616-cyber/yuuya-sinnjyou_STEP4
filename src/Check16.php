<?php
  1,
  // 文字列"Hello,World!"を変数$stringに代入
  $string = "Hello,World!";

  2,
  // 文字列$stringの長さを計算し、出力
  echo strlen($string);

  3,
  // 文字列$stringの"World"を"PHP"に置き換えて、出力
  echo str_replace("World","PHP",$string);

  4,
  // 文字列$stringの最初の5文字を取得し、出力
  echo substr($string,0,5);
?>