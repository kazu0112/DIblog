<?php

//エラー件数
$error_count = 0;

$family_name_error = "";
$last_name_error = "";
$family_name_kana_error = "";
$last_name_kana_error = "";
$mail_error = "";
$password_error = "";
$gender_error = "";
$postal_code_error = "";
$prefecture_error = "";
$address_1_error = "";
$address_2_error = "";
$authority_error = "";

$family_name = $_POST['family_name'];
if ($family_name == "") {
    $family_name_error = "名前（姓）が未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[ぁ-んー-龥]+$/u", $family_name)){
} else{
        $family_name_error = "名前（姓）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$last_name = $_POST['last_name'];
if ($last_name == ""){
    $last_name_error = "名前（名）が未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[ぁ-んー-龥]+$/u", $last_name)){
} else{
        $last_name_error = "名前（名）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$family_name_kana = $_POST['family_name_kana'];
if ($family_name_kana == ""){
    $family_name_kana_error = "カナ（姓）が未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[ァ-ヶー]+$/u", $family_name_kana)) {
} else {
        $family_name_kana_error = "カナ（姓）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$last_name_kana = $_POST['last_name_kana'];
if ($last_name_kana == ""){
    $last_name_kana_error = "カナ（名）が未入力です。";
    $error_count++;
} else{
     if (preg_match("/^[ァ-ヶー]+$/u", $last_name_kana)) {
} else {
        $last_name_kana_error = "カナ（名）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$mail = $_POST['mail'];
if ($mail == ""){
    $mail_error = "メールアドレスが未入力です。";
    $error_count++;
} else{
    if (preg_match("/^[a-zA-Z0-9@-]+$/", $mail)) {
} else {
        $mail_error = "メールに使用できない文字が含まれています。";
        $error_count++;
    }
}

$password = $_POST['password'];
if ($password == "") {
    $password_error = "パスワードが未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[a-zA-Z0-9]+$/", $password)) {
    } else {
        $password_error = "パスワードに使用できない文字が含まれています。";
        $error_count++;
    }
}

$gender = $_POST['gender'];
if ($gender == ""){
    $gender_error = "性別が未選択です。";
    $error_count++;
}

if ($gender == 0){
    $gender_text = "男";
} else{
    $gender_text = "女";
}

$postal_code = $_POST['postal_code'];
if ($postal_code == "") {
    $postal_code_error = "郵便番号が未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[0-9]+$/", $postal_code)) {
} else {
        $postal_code_error = "郵便番号に使用できない文字が含まれています。";
        $error_count++;
    }
}

$prefecture = $_POST['prefecture'];
if ($prefecture == "") {
    $prefecture_error = "住所（都道府県）が未選択です。";
    $error_count++;
} 

$address_1 = $_POST['address_1'];
if ($address_1 == "") {
    $address_1_error = "住所（市区町村）が未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[ぁ-んァ-ヶ一-龥0-9０-９ー 　-]+$/u", $address_1)) {
} else {
        $address_1_error = "住所（市区町村）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$address_2 = $_POST['address_2'];
if ($address_2 == "") {
    $address_2_error = "住所（番地）が未入力です。";
    $error_count++;
} else {
    if (preg_match("/^[ぁ-んァ-ヶ一-龥0-9０-９ー 　-]+$/u", $address_2)) {
} else {
        $address_2_error = "住所（番地）に使用できない文字が含まれています。";
        $error_count++;
    }
}

$authority = $_POST['authority'];
if ($authority == "") {
    $authority_error = "アカウント権限が未選択です。";
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
    <link rel="stylesheet" type="text/css" href="regist.css">
</head>

<body>
    
    <?php
    //エラーが0件の場合
    if ($error_count == 0){
    ?>

    <h1>アカウント登録確認</h1>
        
        <p>名前（姓）:<?php echo $family_name; ?></p>
        <p>名前（名）:<?php echo $last_name; ?></p>
        <p>カナ（姓）:<?php echo $family_name_kana; ?></p>
        <p>カナ（名）:<?php echo $last_name_kana; ?></p>
        <p>メールアドレス:<?php echo $mail; ?></p>
        <p>パスワード:<?php echo str_repeat("⚫️", strlen($password)); ?></p>
        <P>性別:<?php echo $gender_text; ?></P>
        <P>郵便番号:<?php echo $postal_code; ?></P>
        <P>住所（都道府県）:<?php echo $prefecture; ?></P>
        <P>住所（市区町村）:<?php echo $address_1; ?></P>
        <P>住所（番地）:<?php echo $address_2; ?></P>
        <P>アカウント権限:<?php echo $authority_text; ?></P>
    
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
        
        <?php
        } else {
        ?>

        <form id="errorForm" method="post" action="regist.php">

            <input type="hidden" name="family_name" value="<?php echo $family_name; ?>">
            <input type="hidden" name="family_name_error" value="<?php echo $family_name_error; ?>">

            <input type="hidden" name="last_name" value="<?php echo $last_name; ?>">
            <input type="hidden" name="last_name_error" value="<?php echo $last_name_error; ?>">

            <input type="hidden" name="family_name_kana" value="<?php echo $family_name_kana; ?>">
            <input type="hidden" name="family_name_kana_error" value="<?php echo $family_name_kana_error; ?>">

            <input type="hidden" name="last_name_kana" value="<?php echo $last_name_kana; ?>">
            <input type="hidden" name="last_name_kana_error" value="<?php echo $last_name_kana_error; ?>">

            <input type="hidden" name="mail" value="<?php echo $mail; ?>">
            <input type="hidden" name="mail_error" value="<?php echo $mail_error; ?>">

            <input type="hidden" name="password" value="<?php echo $password; ?>">
            <input type="hidden" name="password_error" value="<?php echo $password_error; ?>">

            <input type="hidden" name="gender" value="<?php echo $gender; ?>">
            <input type="hidden" name="gender_error" value="<?php echo $gender_error; ?>">

            <input type="hidden" name="postal_code" value="<?php echo $postal_code; ?>">
            <input type="hidden" name="postal_code_error" value="<?php echo $postal_code_error; ?>">

            <input type="hidden" name="prefecture" value="<?php echo $prefecture; ?>">
            <input type="hidden" name="prefecture_error" value="<?php echo $prefecture_error; ?>">

            <input type="hidden" name="address_1" value="<?php echo $address_1; ?>">
            <input type="hidden" name="address_1_error" value="<?php echo $address_1_error; ?>">

            <input type="hidden" name="address_2" value="<?php echo $address_2; ?>">
            <input type="hidden" name="address_2_error" value="<?php echo $address_2_error; ?>">

            <input type="hidden" name="authority" value="<?php echo $authority; ?>">
            <input type="hidden" name="authority_error" value="<?php echo $authority_error; ?>">

            <input type="submit" value="入力画面に戻る">

        </form>
    
            <script>
                document.getElementById("errorForm").submit();
            </script>
    
    <?php
    }
    ?>

</body>

</html>