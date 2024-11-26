<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品変更</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container3">
        <div class="header">
            THE・脳筋　　　　　管理者　　　　　
                <input type="button" type="submit" value="ログアウト">
        </div>
    
        商品ID：XXXXX<br><br>

        商品名：【XXXXX】<br><br>

        価格：XXXXX円<br><br>

        <hr class="dotted-line">

        <div class="label-container5">
            <label for="shouhinid" class="shouhinid">商品ID</label>
            <input type="text" name="shouhinid" class="skid">
        </div>
        <div class="label-container5">
            <label for="shouhinname" class="shouhinname">商品名</label>
            <input type="text" name="shouhinname" class="skid">
        </div>
        <div class="label-container5">
            <label for="kakaku" class="kakaku">価格</label>
            <input type="text" name="kakaku" class="skid">
        </div>
        <div class="label-container5">
            <label for="zaiko" class="zaiko">在庫</label>
            <input type="text" name="zaiko" class="skid">
        </div>
    <br>

    <div class="tsh">
        <button type="submit" name="touroku" class="tbutton">登録</button>
        <button type="submit" name="sakujo" class="shbutton">削除</button>
        <button type="submit" name="henkou" class="shbutton">変更</button>
    </div>

    <button type="submit" name="back" class="modoru">戻る</button>

    </div>
</body>
</html>