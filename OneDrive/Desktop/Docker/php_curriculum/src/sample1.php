<?php
class Human {
    public $name;
    public $age;

    public function __construct($name,$age) {
        $this->name = $name;
        $this->sge = $age;
    }

    public function introduce() {
        echo "こんにちわ、私の名前は{$this->name}です。年齢は{$this->age}歳です。";
    }
}

// インスタンスの生成
$myHuman = new Human("太郎",29);

// インスタンスのプロパティにアクセス
// 出力：太郎
echo $myHuman->name;

// 出力：29
echo $myHuman->age;

// インスタンスのメソッドを呼び出す
$myHuman->introduce();
?>