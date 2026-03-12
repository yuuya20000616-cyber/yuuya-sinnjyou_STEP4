<?php

echo "Hello CyTech";

// 右辺に”CyTech”を変数$nameに代入する
$name = "CyTech";

// 右辺に”100"を変数$numに代入する
$num = 100;

echo $name;
echo $num;

// 整数型
$int = 100;
echo $int;

// 浮動小数点型
$flont_one = 3.14;
$flont_two = 3.14;

$result = $flont_one * $flont_two;
echo $result;

// 文字列型
$str = "Hello Cytech";
echo $str;

// 配列
$num = array(100,200,300,400);
echo $num[0];

// 多次元配列
$data = array(
 array(1,2,3),// int型
 array("CyTech","Toro","PHP")// string型
);

//　出力
echo $data[0][0];
echo $data[1][0];

//　オブジェクト(object)
// 　↓オブジェクトの設計書(クラス)です
class Person{


}

// オブジェクト自身です。
new Person();

// defineの使い方
define("TAX",1.10);
$price = 100;

// 出力
echo "税込".$price * TAX."円";

// const使い方
// クラス定数
class Cytech{
    const PHP = "Hello";
}

echo Cytech::PHP;

// constキーワードを使って定数を定義
// 定義のみなので、実行はできません。
// ①
const DIR = __DIR__;

// ②
const HOGE = CytechClass::HOGE;

class A{
    // プロパティ　(変数)
    public $variabule = 100;

    // メソッド　(関数)
    public function sample() {
        echo "Sample";
    }
}
?>                                               