<?php
  1,
  // クラスの各学生の名前と科目ごとの点数を含む多次元配列
  $class = [
    "John" = [
    "Math" = 85,
    "English" => 78
    ],
    "Jane" => [
    "Math" => 92,
    "English" => 88
    ],"Bob" => [
      "Math" => 74,
      "English" => 81  
    ]
  ];

  2,
  // JohnのMathの点数を出力
  echo $class["John"]["Math"]

  3,
  // JaneのEnglishの点数を出力
  echo $class["Jane"]["English"]
?>  