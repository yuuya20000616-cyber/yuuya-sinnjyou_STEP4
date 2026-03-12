<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>名前表示</title>
</head>
<body>
    <h1>入力された名前は</h1>
    <?php
      // POSTリクエストから名前を取得して表示する
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        // 名前が半角英数字および一部の記号で構成されているかどうかを確認する
        if (preg_match("/^[a-zA-Z0-9]+$/", $name)) {
          echo "<p>{$name}</p>";
        } else {
          echo "<p>名前は半角英数字および一部の記号のみで入力してください</p>";
        }
      } else {
        echo "<p>名前がありません</p>";
      }
    ?>
    <a href="contact.php">戻る</a>
</body>
</html>    