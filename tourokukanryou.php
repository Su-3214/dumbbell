<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
if (isset($_POST['rogin_back'])) {
    header("Location: localhost/test/rogin"); // 遷移先のURLを指定
}
?>
    <div class="container">
        <h3>THE・脳筋</h3>
        <h3>会員登録が完了しました</h3>
        <!--ここからForm-->
        <form action="rogin.php" method="POST">
            <button type="submit" name="rogin_back">ログイン画面へ</button>
        </form>

    </div>
</body>

</html>