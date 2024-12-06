<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>支払確認</title>
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
        <br>
        <div class="item">
            <span class="dot">・</span>
            <img src="../img/chocolate.png" alt="画像" width="75px" height="100px">
            <div class="details">
                <div>【チョコレート味３㎏】</div>
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
    
        
        <button class="back" type="button" onclick="window.location.href='shouhinitiran.php'">戻る</button>
        <button class="touroku" type="button" onclick="window.location.href='okurisakikakunin.php'">購入手続きへ進む</button>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
