<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>支払確認</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?
    if (isset($_POST['okurisaki'])) {
        header("Location: localhost/test/okurisakikakunin");
    }
    if (isset($_POST['back'])) {
        header("Location: localhost/test/shohinitiran");
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
            <input type="image" src="../img/button.png" alt="画像ボタン" 
            width="30" height="30" onclick="window.location.href='kensaku.php'">
            <input type="image" src="../img/cart.png" alt="画像ボタン" 
            width="30" height="30" onclick="window.location.href='shiharaikakunin.php'">
        </div>
        <br>
        <div class="item">
            <img src="../img/matcha.png" alt="画像" width="75px" height="100px">
            <div class="details">
                <div>【濃い抹茶味 ３㎏】</div>
                <div class="price">6,990円</div>
            </div>
        </div>

        <div class="counter-container">
            <button onclick="decrease()">－</button>
            <span id="number">0</span>
            <button onclick="increase()">＋</button>
            <input type="button" class="update-button" value="更新">
            <input type="button" class="delete-button" value="削除">
        </div>  
        <br>

        <hr class="dotted-line">
        <div class="total">合計：￥6,980(税込)</div>
        <hr class="dotted-line">

        <div class="label-container">
            送り宛名<br>
            </div>
            <div class="label-container2">
                    <input type="text" name="atena" class="textbox"><br>
            </div>
    
            <div class="label-container">
            送り先住所<br>
            </div> 
            <div class="label-container2">
                <input type="text" name="okurisakiaddress" class="textbox"><br>
        </div>
    
        <form action="shouhinitiran.php" method="POST">
        <button class="back" type="submit" name="back">戻る</button>
        </form>
        <form action="okurisakikakunin.php" method="POST">
        <button class="touroku" type="submit" name="okurisaki">購入手続きへ進む</button>
        </form>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
