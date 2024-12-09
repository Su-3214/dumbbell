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
        <h3>会員一覧</h3>
        会員ID　
        <button type="submit" name="khensyuu" class="shbutton" onclick="window.location.href='kaiinhenkou.php'">編集/削除</button><br>
        会員名　
        <button type="submit" name="khensyuu" class="shbutton" onclick="window.location.href='kaiinhenkou.php'">編集/削除</button><br>
        メールアドレス　
        <button type="submit" name="khensyuu" class="shbutton" onclick="window.location.href='kaiinhenkou.php'">編集/削除</button><br>
        Pass　
        <button type="submit" name="khensyuu" class="shbutton" onclick="window.location.href='kaiinhenkou.php'">編集/削除</button><br>
        住所　
        <button type="submit" name="khensyuu" class="shbutton" onclick="window.location.href='kaiinhenkou.php'">編集/削除</button><br>

        <button type="submit" name="back" class="modoru" onclick="window.location.href='kanrisyatop.php'">戻る</button>
            
    </div>
</body>
</html>