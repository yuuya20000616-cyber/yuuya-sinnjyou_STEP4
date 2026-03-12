<?php
// 連想配列を定義
$fruitu = [
    "りんご" => 100,
    "バナナ" => 50,
    "オレンジ" => 70,
];
// 配列のキーと値を取得
foreach ($fruitu as $name => $price) {
    // 出力
    echo $name . ":" . $price . "円\n";
}
?>