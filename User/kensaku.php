<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?
    if (isset($_POST['batu'])) {
        header("Location: localhost/test/shouhinitiran");
    }
    if (isset($_POST['search'])) {
        header("Location: localhost/test/kensakukekka");
    }
    ?>
    <div class="container2">
        <div class="close-container">
            <div class="batu">
                <form action="shouhinitiran.php" method="POST">
                    <button type="submit" name="batu"><b>×</b></button>
                </form>
            </div>
            <span><b>閉じる</b></span>
        </div><br><br><br><br><br><br>
        <div class="youso">
            <div class="key"><b>キーワード：</b></div>
            <input type="textbox" name="keyword" class="keyword"><br>
        </div>
        <div class="youso">
            <div class="kakakutai"><b>価格帯：</b></div>
            <input type="textbox" name="max" class="max">
            <div class="kara">～</div><input type="textbox" name="min" class="min"><br>
        </div>
        <div class="youso">
            <div class="mi"><b>味：</b></div>
            <input type="text" name="taste" class="taste">
        </div>
        <form action="kensakukekka.php" method="POST">
        <button class="search" type="submit" name="search">検索</button>
        </form>
    </div>
</body>

</html>