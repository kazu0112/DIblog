<?php

//エラー件数
$error_count = 0;

$family_name = $_POST['family_name'];
if ($family_name == "") {
    echo "名前（姓）が未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[ぁ-んー-龥]+$/u", $family_name)){
} else{
        echo "名前（姓)に使用できない文字が含まれています。";
        $error_count++;
    }
}

$last_name = $_POST['last_name'];
if ($last_name == ""){
    echo "名前（名）が未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[ぁ-んー-龥]+$/u", $family_name)){
} else{
        echo "名前（姓)に使用できない文字が含まれています。";
        $error_count++;
    }
}

$family_name_kana = $_POST['family_name_kana'];
if ($family_name_kana == ""){
    echo "カナ（姓）が未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[ァ-ヶー]+$/u", $family_name_kana)) {
} else {
        echo "カナ（姓）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$last_name_kana = $_POST['last_name_kana'];
if ($last_name_kana == ""){
    echo "カナ（名）が未入力です。";
    $error_count++;
} else{
     if (preg_match("/^[ァ-ヶー]+$/u", $family_name_kana)) {
} else {
        echo "カナ（姓）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$mail = $_POST['mail'];
if ($mail == ""){
    echo "メールアドレスが未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[a-zA-Z0-9]+$/", $password)) {
} else {
        echo "パスワードに使用できない文字が含まれています。";
        $error_count++;
    }
}

$password = $_POST['password'];
if ($password == "") {
    echo "パスワードが未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[a-zA-Z0-9@-]+$/", $mail)) {
} else {
        echo "メールアドレスに使用できない文字が含まれています。";
        $error_count++;
    }
}

$gender = $_POST['gender'];
if ($gender == ""){
    echo "性別が未選択です。";
    $error_count++;
}

if ($gender == 0){
    $gender_text = "男";
} else{
    $gender_text = "女";
}

$postal_code = $_POST['postal_code'];
if ($postal_code == "") {
    echo "郵便番号が未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[0-9]+$/", $postal_code)) {
} else {
        echo "郵便番号に使用できない文字が含まれています。";
        $error_count++;
    }
}

$prefecture = $_POST['prefecture'];
if ($prefecture == "") {
    echo "住所（都道府県）が未選択です。";
    $error_count++;
} 

$address_1 = $_POST['address_1'];
if ($address_1 == "") {
    echo "住所（市区町村）が未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[ぁ-んァ-ヶ一-龥0-9０-９ー 　-]+$/u", $address_1)) {
} else {
        echo "住所（市区町村）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$address_2 = $_POST['address_2'];
if ($address_2 == "") {
    echo "住所（番地）が未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[ぁ-んァ-ヶ一-龥0-9０-９ー 　-]+$/u", $address_2)) {
} else {
        echo "住所（番地）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$authority = $_POST['authority'];
if ($authority == "") {
    echo "アカウント権限が未選択です。";
    $error_count++;
}

if ($authority == 0){
    $authority_text = "一般";
} else{
    $authority_text = "管理者";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録確認</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <?php
    //エラーが0件の場合
    if ($error_count == 0){
    ?>

    <h1>アカウント登録確認</h1>
        
        <p>名前（性）:<?php echo $family_name; ?></p>
        <p>名前（名）:<?php echo $last_name; ?></p>
        <p>カナ（性）:<?php echo $family_name_kana; ?></p>
        <p>カナ（名）:<?php echo $last_name_kana; ?></p>
        <p>メールアドレス:<?php echo $mail; ?></p>
        <p>パスワード:<?php echo str_repeat("⚫️", strlen($password)); ?></p>
        <P>性別:<?php echo $gender_text; ?></P>
        <P>郵便番号:<?php echo $postal_code; ?></P>
        <P>住所（都道府県）:<?php echo $prefecture; ?></P>
        <P>住所（市区町村）:<?php echo $address_1; ?></P>
        <P>住所（番地）:<?php echo $address_2; ?></P>
        <P>アカウント権限:<?php echo $authority_text; ?></P>

    <?php
    }
    ?>
    
    <form method="post" action="regist_complete.php">

        <input type="hidden" name="family_name" value="<?php echo $family_name; ?>">
        <input type="hidden" name="last_name" value="<?php echo $last_name; ?>">
        <input type="hidden" name="family_name_kana" value="<?php echo $family_name_kana; ?>">
        <input type="hidden" name="last_name_kana" value="<?php echo $last_name_kana; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
        <input type="hidden" name="gender" value="<?php echo $gender; ?>">
        <input type="hidden" name="postal_code" value="<?php echo $postal_code; ?>">
        <input type="hidden" name="prefecture" value="<?php echo $prefecture; ?>">
        <input type="hidden" name="address_1" value="<?php echo $address_1; ?>">
        <input type="hidden" name="address_2" value="<?php echo $address_2; ?>">
        <input type="hidden" name="authority" value="<?php echo $authority; ?>">

        <input type="submit" value="登録する">

    </form>
    
    <!-- 前に戻る -->

    <form method="post" action="regist.php">

        <input type="hidden" name="family_name" value="<?php echo $family_name; ?>">
        <input type="hidden" name="last_name" value="<?php echo $last_name; ?>">
        <input type="hidden" name="family_name_kana" value="<?php echo $family_name_kana; ?>">
        <input type="hidden" name="last_name_kana" value="<?php echo $last_name_kana; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
        <input type="hidden" name="gender" value="<?php echo $gender; ?>">
        <input type="hidden" name="postal_code" value="<?php echo $postal_code; ?>">
        <input type="hidden" name="prefecture" value="<?php echo $prefecture; ?>">
        <input type="hidden" name="address_1" value="<?php echo $address_1; ?>">
        <input type="hidden" name="address_2" value="<?php echo $address_2; ?>">
        <input type="hidden" name="authority" value="<?php echo $authority; ?>">

        <input type="submit" value="前に戻る">

    </form>

</body>

</html>