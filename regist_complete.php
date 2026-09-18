<?php

$family_name = $_POST['family_name'];
$last_name = $_POST['last_name'];
$family_name_kana = $_POST['family_name_kana'];
$last_name_kana = $_POST['last_name_kana'];
$mail = $_POST['mail'];
$password = $_POST['password'];
// パスワードをハッシュ化
$password = password_hash($password, PASSWORD_DEFAULT);
$gender = $_POST['gender'];
$postal_code = $_POST['postal_code'];
$prefecture = $_POST['prefecture'];
$address_1 = $_POST['address_1'];
$address_2 = $_POST['address_2'];
$authority = $_POST['authority'];

//データベース接続
$mysqli = new mysqli("localhost", "root", "root", "lesson01");

if ($mysqli->connect_error) {
    die("データベース接続に失敗しました。");
}

$mysqli->set_charset("utf8");


// データベースに登録
$sql = "INSERT INTO account
        (family_name, last_name, family_name_kana, last_name_kana, mail, password, gender, postal_code, prefecture, address_1, address_2, authority, delete_flag, registered_time, update_time)
        VALUES
        ('$family_name', '$last_name', '$family_name_kana', '$last_name_kana', '$mail', '$password', '$gender', '$postal_code', '$prefecture', '$address_1', '$address_2', '$authority', 0, NOW(), NOW())";

$result = $mysqli->query($sql);

if (!$result) {
    echo "<p style='color:red;'>エラーが発生したためアカウント登録できません。</p>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録完了</title>
    <link rel="stylesheet" type="text/css" href="regist.css?v=2">
</head>

<body>

<header>
    <ul>
        <li>ヘッダー</li>
    </ul>
</header>

<main>
    <div class="main-container">
        <div class="right"> 
            <h1>アカウント登録完了画面</h1>
           <div class="complete">
            <p>登録完了しました</p>
                <form method="post" action="index.php">
                    <input type="submit" value="TOPページへ戻る">
                </form>
            </div>
        </div>
    </div>
</main>

<footer>
    フッター
</footer>

</body>
</html>