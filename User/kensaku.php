<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container2">
        <div class="close-container">
            <div class="batu">
                <button type="submit" name="batu" onclick="window.location.href='shouhinitiran.php'"><b>×</b></button>
            </div>
            <span><b>閉じる</b></span>
        </div><br><br><br><br><br><br>
        <div class="youso">
            <div class="key"><b>キーワード：</b></div>
            <input type="textbox" name="keyword" class="keyword" placeholder="キーワードを入力"><br>
        </div>
        <div class="youso">
            <div class="kakakutai"><b>価格帯：</b></div>
            <input type="textbox" name="max" class="max" placeholder="0">
            <div class="kara">～</div><input type="textbox" name="min" class="min" placeholder="3000"><br>
        </div>
        <div class="youso">
            <div class="mi"><b>味：</b></div>
            <input type="text" name="taste" class="taste" placeholder="プレーン">
        </div>
        <button class="search" type="button" onclick="window.location.href='kensakukekka.php'">検索</button>
    </div>
</body>
</html>

