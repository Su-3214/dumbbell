<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
    <div class="header">
        <h3 onclick="window.location.href='shouhinitiran.php'" >THE・脳筋</h3>
            <input type="button" type="submit" value="購入履歴" onclick="window.location.href='kounyuurireki.php'">
            <input type="button" type="submit" value="ログアウト" onclick="window.location.href='login.php'">
            <input type="image" src="../img/button.png" alt="画像ボタン" 
            width="30" height="30" onclick="window.location.href='kensaku.php'">
            <input type="image" src="../img/cart.png" alt="画像ボタン" 
            width="30" height="30" onclick="window.location.href='shiharaikakunin.php'">
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

            <button class="back" type="button" onclick="window.location.href='shouhinitiran.php'">戻る</button>

</body>
</html>
