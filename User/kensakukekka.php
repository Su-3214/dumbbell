<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?
    if (isset($_POST['back'])) {
        header("Location: localhost/test/shouhinitiran");
    }
    if (isset($_POST['rireki'])) {
        header("Location: localhost/test/kounyuurireki");
    }
    if (isset($_POST['logout'])) {
        header("Location: localhost/test/login");
    }
    ?>
    <div class="container">
        <div class="header">
            THE・脳筋
            <form action="kounyuurireki.php" method="POST">
                <input type="submit" value="購入履歴" name="rireki">
            </form>
            <form action="login.php" method="POST">
                <input type="submit" value="ログアウト" name="logout">
            </form>
            <!--画像でフォームを送ろうとしてみる-->
            <input type="image" src="../img/button.png" alt="検索ボタン" width="30" height="30" form="Find">
            <form action="kensaku.php" method="POST" id="Find"></form>

            <input type="image" src="../img/cart.png" alt="画像ボタン" width="30" height="30">
        </div>

        <div class="kekka">
            <h2>検索結果</h2>
        </div>

        <div class="youso">
            <div>キーワード：XXXXX</div>
            <div>価格帯：XXXXX～XXXXX</div>
        </div>
        <div class="azi">味：XXXXXX</div>

        <div class="kensuu">X件</div>

        <div class="shouhin-container">
            <div class="shouhin">
                <img src="../img/chocolate.png" alt="画像" width="117px" height="135px">
                <div>【チョコレート味３㎏】</div>
                <div class="price">6,990円</div>
                <button class="cartbutton" type="button">カートに入れる</button>
            </div>
        </div>

        <div class="page">
            <h2>X件</h2>
        </div>
        <form action="shouhinitiran.php" method="POST">
            <button class="back" type="submit" name="back">戻る</button>
        </form>

</body>

</html>