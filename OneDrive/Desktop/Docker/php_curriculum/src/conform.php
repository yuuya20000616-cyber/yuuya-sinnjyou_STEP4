<?php
   $name = $_POST['name'] ?? '';
   $age = $_POST['age'] ?? '';
   $phone = $_POST['phone'] ?? '';
   $email = $_POST['email'] ?? '';
   $address = $_POST['address'] ?? '';
   $question = $_POST['question'] ?? '';
   $gender = $_POST['gender'] ?? '';

   $errors = [];

   if ($name === '') {
       $errors[] = '名前を入力してください。';
   } elseif (!preg_match('/^[あ-んア-ケ一龠a-zA-Zー\s]+$/u', $name)) {
       $errors[] = '名前はひらがな、カタカナ、漢字、英字のみ使用できます。';
   }

   if ($age === '') {
       $errors[] = '年齢を入力してください。';
   } elseif (!filter_var($age, FILTER_VALIDATE_INT) || $age < 0 || $age > 150) {
       $errors[] = '年齢は0から150の間で入力してください。';
   }

   if ($phone === '') {
       $errors[] = '電話番号を入力してください。';
   } elseif (!preg_match('/^[0-9-]+$/', $phone)) {
       $errors[] = '電話番号は半角数字とハイフンのみ使用できます。';
   }

   if ($email === '') {
       $errors[] = 'メールアドレスを入力してください。';
   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'メールアドレスの形式が正しくありません。';
   }

   if ($address === '') {
       $errors[] = '住所を入力してください。';
   } elseif (!preg_match('/^[あ-んア-ケ一龠a-zA-Z\s\-]+$/u', $address)) {
       $errors[] = '住所はひらがな、カタカナ、漢字、英字のみ使用できます。';
   }

   if ($question === '') {
       $errors[] = '質問を入力してください。';
   }

   if ($gender === '') {
       $errors[] = '性別を選択してください。';
   }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>入力内容確認</h1>

        <?php if (!empty($errors)) : ?>
            <div class="error-box">
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endforeach; ?>
                </div>
                
                <div class="back-area">
                    <a href="form.php" class="back-button">戻る</a>
                </div>
        <?php else : ?>
            <div class="confirm-box">
                <p><span>名前: </span><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><span>年齢: </span><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><span>電話番号: </span><?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><span>メールアドレス: </span><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><span>住所: </span><?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><span>質問: </span><?php echo  nl2br(htmlspecialchars($question, ENT_QUOTES, 'UTF-8')); ?></p>
                <p><span>性別: </span><?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            
            <div class="back-area">
                <a href="form.php" class="back-button">戻る</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>