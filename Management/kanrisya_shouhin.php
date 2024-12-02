<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ログイン</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container3">
        <div class="header">
            THE・脳筋　　　　　管理者　　　　　
                <input type="button" type="submit" value="ログアウト" onclick="window.location.href='kanrisyalogin.php'">
        </div>

        <h3>商品一覧</h3>
        商品ID　
        <button type="submit" name="shensyuu" class="shbutton" onclick="window.location.href='shouhinhenkou.php'">編集/削除</button><br>
        商品名　
        <button type="submit" name="shensyuu" class="shbutton" onclick="window.location.href='shouhinhenkou.php'">編集/削除</button><br>
        価格　
        <button type="submit" name="shensyuu" class="shbutton" onclick="window.location.href='shouhinhenkou.php'">編集/削除</button><br>
        在庫　
        <button type="submit" name="shensyuu" class="shbutton" onclick="window.location.href='shouhinhenkou.php'">編集/削除</button><br>

        <button type="submit" name="back" class="modoru" onclick="window.location.href='kanrisyatop.php'">戻る</button>
        
    </div>
</body>
</html>