<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員変更</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container3">
        <div class="header">
            THE・脳筋　　　　　管理者　　　　　
                <input type="button" type="submit" value="ログアウト" onclick="window.location.href='kanrisyalogin.php'">
        </div>
    
        会員ID：XXXXX<br><br>

        会員名：XXXXX<br><br>

        メール：XXXXX@XXXXX<br><br>

        <hr class="dotted-line">

        <div class="label-container5">
            <label for="kaiinid">会員ID</label>
            <input type="text" name="kaiinid" class="skid">
        </div>
        <div class="label-container5">
            <label for="kaiinmei">会員名</label>
            <input type="text" name="kaiinname" class="skid">
        </div>
        <div class="label-container5">
            <label for="mail">メール</label>
            <input type="text" name="mail" class="skid">
        </div>
        <div class="label-container5">
            <label for="Pass" class="Pass">Pass</label>
            <input type="text" name="pass" class="skid">
        </div>
        <div class="label-container5">
            <label for="jusyo" class="jusyo">住所</label>
            <input type="text" name="jusyo" class="skid">
        </div>
    <br>

    <div class="tsh">
        <button type="submit" name="touroku" class="tbutton">登録</button>
        <button type="submit" name="sakujo" class="shbutton">削除</button>
        <button type="submit" name="henkou" class="shbutton" onclick="window.location.href='Khenkoukakunin.php'">変更</button>
    </div>

    <button type="submit" name="back" class="modoru" onclick="window.location.href='kanrisya_kaiin.php'">戻る</button>

    </div>
</body>
</html>