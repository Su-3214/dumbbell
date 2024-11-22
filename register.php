<?php
$servername = "localhost";  // MySQLサーバー名
$username = "root";       // MySQLユーザー名
$password = "";            // MySQLパスワード
$dbname = "your_database"; // データベース名

try {
    // PDOによる接続
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // エラーモードを例外に設定
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // DBによって変更。
    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";

    // プリペアドステートメントを作成
    $stmt = $conn->prepare($sql);

    // パラメータをバインド
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    // クエリを実行
    $stmt->execute();

    echo "会員登録が完了しました！";
} catch (PDOException $e) {
    // 接続エラーやクエリエラーが発生した場合
    echo "会員登録に失敗しました: " . $e->getMessage();
}
?>