<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送り先確認</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <hr class="dotted-line">
            <h3>購入を完了する</h3>

            <div class="flex-container">
                商品の小計：<div class="right-align">￥6,980</div>
            </div>
            
            <div class="flex-container">
                配送料・手数料：<div class="right-align">￥0</div>
            </div>

            <div class="flex-container">
                    <h2>ご請求額：</h2>
                <div class="total-container">
                    <h2>￥6,980</h2>
                </div>
            </div>
        <hr class="dotted-line">
            <strong>お支払方法</strong><br>
            クレジットカード(VISA,JCB,Masterがご利用頂けます)<br>
            <div class="flex-container">
                カード番号
                <div class="right-align">
                    <input type="text" name="credit"><br>
                </div>
            </div>
            <div class="flex-container">
                セキュリティコード
                <div class="right-align">
                    <input type="text" name="security"><br>
                </div>
            </div>
            <div class="flex-container">
                有効期限(年/月)
                <div class="right-align">
                    <input type="text" name="deadline"><br>
                </div>
            </div>
        <hr class="dotted-line">
        <div class="flex-container">
            <h3>ご到着予定：1週間以内</h3>
        </div>

        <button class="back" type="button" onclick="window.location.href='shiharaikakunin.php'">戻る</button>
        <button class="touroku" type="button" onclick="window.location.href='tyuumonkakutei.php'">購入を完了する</button>
    </div>
</body>
</html>
