<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>ログイン</title>
</head>
<body>
    <div class="container">
        <h3>THE・脳筋</h3>
        <h3>ログイン</h3>
        <p>会員の方は、登録時に入力されたEメールアドレスとパスワードでログインしてください。</p>

        <div class="label-container">
            メールアドレス<br>
        </div>
        <div class="label-container2">
            <input type="text" name="mail" class="textbox"><br>
        </div>
        <div class="label-container">
            パスワード<br>
        </div>
        <div class="label-container2">
            <input type="text" name="pass" class="textbox"><br>
        </div>
        <input type="checkbox" name="example" value="0">パスワードを表示する
        
        <button class="login" type="button" onclick="window.location.href='shouhinitiran.php'" >ログイン</button>
        
        <input type="checkbox" name="example2" value="1">ログインしたままにする

        <hr class="dotted-line">
        <h3>まだ会員登録されていない方</h3>
        <p>初めてご利用の方は、こちらから会員登録すると便利にお買い物ができるようになります。</p>
        <button class="touroku" type="button" onclick="window.location.href='shinkitouroku.php'">新規会員登録</button>

    </div>
    
</body>
</html>