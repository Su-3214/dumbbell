<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?
    if (isset($_POST['top'])) {
        header("Location: localhost/test/shouhinitiran");
    }
    ?>
    <div class="container">
        <h3>THE・脳筋</h3>
        <br><br><br><br><br>
        <br><br><br>
        <h2>
            購入手続きが<br>
            完了しました
        </h2>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <form action="shouhinitiran.php" method="POST">
        <button class="top" type="submit" name="top">トップページ</button>
        </form>
    </div>
</body>
</html>
