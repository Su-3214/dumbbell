<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?
    if (isset($_POST['shiharai'])) {
        header("Location: localhost/test/shiharaikakunin");
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
            <input  type="submit" value="ログアウト" name="logout">
            </form>
            <!--画像でフォームを送ろうとしてみる-->
            <input type="image" src="../img/button.png" alt="検索ボタン" width="30" height="30" form = "Find">
            <form action="kensaku.php" method="POST" id = "Find"></form>
            
            <input type="image" src="../img/cart.png" alt="画像ボタン" width="30" height="30">
        </div>
        <br>
        <!-- 1段目 -->
        <div class="shouhin-container">
            <div class="shouhin">
                <img src="../img/chocolate.png" alt="画像" width="117px" height="135px">
                <div>【チョコレート味３㎏】</div>
                <div class="price">6,990円</div>
                <button class="cartbutton" type="buttom">カートに入れる</button>
            </div>
            <div class="shouhin">
                <img src="../img/matcha.png" alt="画像" width="117px" height="135px">
                <div>【濃い抹茶味３㎏】</div>
                <div class="price">6,990円</div>
                <form action="shiharaikakunin.php" method="POST">
                    <button class="cartbutton" type="submit" name="shiharai">カートに入れる</button>
                </form>
            </div>
        </div>
        <!-- 2段目 -->
        <div class="shouhin-container">
            <div class="shouhin2">
                <img src="../img/plain.png" alt="画像" width="117px" height="135px">
                <div>【プレーン味３㎏】</div>
                <div class="price">6,780円</div>
                <button class="cartbutton" type="button">カートに入れる</button>
            </div>
            <div class="shouhin2">
                <img src="../img/darkpeach.png" alt="画像" width="117px" height="135px">
                <div>【濃いピーチ味３㎏】</div>
                <div class="price">7,480円</div>
                <button class="cartbutton" type="button">カートに入れる</button>
            </div>
        </div>
        <!-- 3段目 -->
        <div class="shouhin-container">
            <div class="shouhin3">
                <img src="../img/kiwi.png" alt="画像" width="117px" height="135px">
                <div>【キウイ味３㎏】</div>
                <div class="price">6,980円</div>
                <button class="cartbutton" type="button">カートに入れる</button>
            </div>
            <div class="shouhin3">
                <img src="../img/sweetpotato.png" alt="画像" width="117px" height="135px">
                <div>【さつまいも味３㎏】</div>
                <div class="price">6,980円</div>
                <button class="cartbutton" type="button">カートに入れる</button>
            </div>
        </div>
    </div>
</body>

</html>