<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>ログイン</title>
</head>

<body>
    <?
    if (isset($_POST['login'])) {
        header("Location: localhost/test/shouhinitiran");
    }
    ?>
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
        <form action="shouhinitiran.php" method="POST">
            <button name="login" class="login" type="submit">ログイン</button>
        </form>
        <input type="checkbox" name="example2" value="1">ログインしたままにする

    </div>

</body>

</html>