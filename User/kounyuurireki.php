<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入履歴</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?
    if (isset($_POST['top'])) {
        header("Location: localhost/test/shouhinitiran");
    }
    ?>
    <div class="container">
        <div class="kounyuurireki">
            <div class="krireki">購入履歴</div>
            <form action="shouhinitiran.php" method="POST">
            <button type="submit" name="top" class="toppage">トップページ</button>
            </form>
        </div>

        <hr class="dotted-line">
        <div class="item">
            <img src="../img/chocolate.png" alt="画像" width="75px" height="100px">
            <div class="details">
                <div>【チョコレート味３㎏】</div>
                <div class="price">6,990円</div>
            </div>
        </div>
        <hr class="dotted-line">
    </div>
</body>
</html>