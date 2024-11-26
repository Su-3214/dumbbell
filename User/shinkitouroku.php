<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ボタンがクリックされたとき、画面遷移を行う
    header("Location: localhost/test/tourokukanryou"); // 遷移先のURLを指定
    exit();
}*/
if (isset($_POST['add'])) {
    header("Location: localhost/test/tourokukanryou"); // 遷移先のURLを指定
}
?>
    <div class="container">
        <h3>THE・脳筋</h3>
        <h3>新規会員登録</h3>
        <div class="label-container">
            お名前
        </div>
        <div class="label-container3">
            <input type="text" name="name" class="textbox"><br>
            <div class="note">
                ※苗字と名前の間にスペースは不要です<br>
            </div>
        </div>
        <!--ここからForm-->
        <form action="tourokukanryou.php" method="POST">
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

        <div class="label-container">
        住所<br>
        </div>
        <div class="label-container4">
            <input type="text" name="adress" class="textbox2"><br><br>
        </div>

        <button class="back" type="button" onclick="window.location.href='login.php'">戻る</button>
        <button class="touroku" type="button" onclick="window.location.href='tourokukanryou.php'">この内容で登録する</button>
    </div>
</body>

</html>