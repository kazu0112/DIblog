<?php
$family_name = $_POST['family_name'] ?? "";
$family_name_error = $_POST['family_name_error'] ?? "";

$last_name = $_POST['last_name'] ?? "";
$last_name_error = $_POST['last_name_error'] ?? "";

$family_name_kana = $_POST['family_name_kana'] ?? "";
$family_name_kana_error = $_POST['family_name_kana_error'] ?? "";

$last_name_kana = $_POST['last_name_kana'] ?? "";
$last_name_kana_error = $_POST['last_name_kana_error'] ?? "";

$mail = $_POST['mail'] ?? "";
$mail_error = $_POST['mail_error'] ?? "";

$password = $_POST['password'] ?? "";
$password_error = $_POST['password_error'] ?? "";

$gender = $_POST['gender'] ?? "";
$gender_error = $_POST['gender_error'] ?? "";

$postal_code = $_POST['postal_code'] ?? "";
$postal_code_error = $_POST['postal_code_error'] ?? "";

$prefecture = $_POST['prefecture'] ?? "";
$prefecture_error = $_POST['prefecture_error'] ?? "";

$address_1 = $_POST['address_1'] ?? "";
$address_1_error = $_POST['address_1_error'] ?? "";

$address_2 = $_POST['address_2'] ?? "";
$address_2_error = $_POST['address_2_error'] ?? "";

$authority = $_POST['authority'] ?? "";
$authority_error = $_POST['authority_error'] ?? "";

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    <h1>アカウント登録</h1>
    
    <form method="post" action="regist_confirm.php">
    
        <div>
            <label>名前（性）</label><br>
            <input type="text" name="family_name" maxlength="10" value="<?php echo $_POST['family_name'] ?? ''; ?>">
            
            <?php
                if ($family_name_error != "") {
                echo '<p style="color:red;">' . $family_name_error . '</p>';
                }
            ?> 
        </div>
        <div>
            <label>名前(名)</label><br>
            <input type="text" name="last_name" maxlength="10" value="<?php echo $_POST['last_name'] ?? ''; ?>">
            
            <?php
                if ($last_name_error != "") {
                echo '<p style="color:red;">' . $last_name_error . '</p>';
                }
            ?>
        </div>
        <div>
            <lable>カナ（性）</lable><br>
            <input type="text" name="family_name_kana" maxlength="10" value="<?php echo $_POST['family_name_kana'] ?? ''; ?>">
            
            <?php
                if ($family_name_kana_error != "") {
                echo '<p style="color:red;">' . $family_name_kana_error . '</p>';
                }
            ?>
        </div>
        <div>
            <lable>カナ（名）</lable><br>
            <input type="text" name="last_name_kana" maxlength="10" value="<?php echo $_POST['last_name_kana'] ?? ''; ?>">
            
            <?php
                if ($last_name_kana_error != "") {
                echo '<p style="color:red;">' . $last_name_kana_error . '</p>';
                }
            ?>
        </div>
        <div>
            <label>メールアドレス</label><br>
            <input type="text" name="mail" maxlength="100" value="<?php echo $_POST['mail'] ?? ''; ?>">
            
            <?php
                if ($mail_error != "") {
                    echo '<p style="color:red;">' . $mail_error . '</p>';
                }
            ?>
        </div>
        <div>
            <label>パスワード</label><br>
            <input type="password" name="password" maxlength="10" value="<?php echo $_POST['password'] ?? ''; ?>">
            
            <?php
                if ($password_error != "") {
                    echo '<p style="color:red;">' . $password_error . '</p>';
                }
            ?>
        </div>
        <div>
            <label>性別</label><br>
            <input type="radio" name="gender" value="0" <?php if (!isset($_POST['gender']) || $_POST['gender'] == "0") echo "checked"; ?>>男
            <input type="radio" name="gender" value="1" <?php if (isset($_POST['gender']) && $_POST['gender'] == "1") echo "checked"; ?>>女
        </div>
        <div>
            <label>郵便番号</label><br>
            <input type="text" name="postal_code" maxlength="7" value="<?php echo $_POST['postal_code'] ?? ''; ?>">
            
            <?php
                if ($postal_code_error != "") {
                    echo '<p style="color:red;">' . $postal_code_error . '</p>';
                }
            ?>
        </div>
        <div>
            <label>住所（都道府県）</label><br>
            <select name="prefecture">
                <option value="">選択してください</option>
               <option value="北海道" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "北海道") echo "selected"; ?>> 北海道 </option>

                    <option value="青森県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "青森県") echo "selected"; ?>> 青森県 </option>

                    <option value="岩手県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "岩手県") echo "selected"; ?>> 岩手県 </option>

                    <option value="宮城県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "宮城県") echo "selected"; ?>> 宮城県 </option>

                    <option value="秋田県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "秋田県") echo "selected"; ?>> 秋田県 </option>

                    <option value="山形県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "山形県") echo "selected"; ?>> 山形県 </option>

                    <option value="福島県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "福島県") echo "selected"; ?>> 福島県 </option>

                    <option value="茨城県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "茨城県") echo "selected"; ?>> 茨城県 </option>

                    <option value="栃木県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "栃木県") echo "selected"; ?>> 栃木県 </option>

                    <option value="群馬県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "群馬県") echo "selected"; ?>> 群馬県 </option>

                    <option value="埼玉県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "埼玉県") echo "selected"; ?>> 埼玉県 </option>

                    <option value="千葉県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "千葉県") echo "selected"; ?>> 千葉県 </option>

                    <option value="東京都" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "東京都") echo "selected"; ?>> 東京都 </option>

                    <option value="神奈川県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "神奈川県") echo "selected"; ?>> 神奈川県 </option>

                    <option value="新潟県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "新潟県") echo "selected"; ?>> 新潟県 </option>

                    <option value="富山県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "富山県") echo "selected"; ?>> 富山県 </option>

                    <option value="石川県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "石川県") echo "selected"; ?>> 石川県 </option>

                    <option value="福井県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "福井県") echo "selected"; ?>> 福井県 </option>

                    <option value="山梨県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "山梨県") echo "selected"; ?>> 山梨県 </option>

                    <option value="長野県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "長野県") echo "selected"; ?>> 長野県 </option>

                    <option value="岐阜県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "岐阜県") echo "selected"; ?>> 岐阜県 </option>

                    <option value="静岡県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "静岡県") echo "selected"; ?>> 静岡県 </option>

                    <option value="愛知県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "愛知県") echo "selected"; ?>> 愛知県 </option>

                    <option value="三重県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "三重県") echo "selected"; ?>> 三重県 </option>

                    <option value="滋賀県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "滋賀県") echo "selected"; ?>> 滋賀県 </option>

                    <option value="京都府" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "京都府") echo "selected"; ?>> 京都府 </option>

                    <option value="大阪府" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "大阪府") echo "selected"; ?>> 大阪府 </option>

                    <option value="兵庫県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "兵庫県") echo "selected"; ?>> 兵庫県 </option>

                    <option value="奈良県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "奈良県") echo "selected"; ?>> 奈良県 </option>

                    <option value="和歌山県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "和歌山県") echo "selected"; ?>> 和歌山県 </option>

                    <option value="鳥取県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "鳥取県") echo "selected"; ?>> 鳥取県 </option>

                    <option value="島根県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "島根県") echo "selected"; ?>> 島根県 </option>

                    <option value="岡山県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "岡山県") echo "selected"; ?>> 岡山県 </option>

                    <option value="広島県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "広島県") echo "selected"; ?>> 広島県 </option>

                    <option value="山口県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "山口県") echo "selected"; ?>> 山口県 </option>

                    <option value="徳島県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "徳島県") echo "selected"; ?>> 徳島県 </option>

                    <option value="香川県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "香川県") echo "selected"; ?>> 香川県 </option>

                    <option value="愛媛県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "愛媛県") echo "selected"; ?>> 愛媛県 </option>

                    <option value="高知県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "高知県") echo "selected"; ?>> 高知県 </option>

                    <option value="福岡県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "福岡県") echo "selected"; ?>> 福岡県 </option>

                    <option value="佐賀県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "佐賀県") echo "selected"; ?>> 佐賀県 </option>

                    <option value="長崎県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "長崎県") echo "selected"; ?>> 長崎県 </option>

                    <option value="熊本県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "熊本県") echo "selected"; ?>> 熊本県 </option>

                    <option value="大分県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "大分県") echo "selected"; ?>> 大分県 </option>

                    <option value="宮崎県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "宮崎県") echo "selected"; ?>> 宮崎県 </option>

                    <option value="鹿児島県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "鹿児島県") echo "selected"; ?>> 鹿児島県 </option>

                    <option value="沖縄県" <?php if (isset($_POST['prefecture']) && $_POST['prefecture'] == "沖縄県") echo "selected"; ?>> 沖縄県 </option>
            </select>
            <p style="color:red;"><?php echo $prefecture_error; ?></p>
        </div>
        <div>
            <label>住所（市区町村）</label><br>
            <input type="text" name="address_1" maxlength="10" value="<?php echo $_POST['address_1'] ?? ''; ?>">
            
            <?php
                if ($address_1_error != "") {
                    echo '<p style="color:red;">' . $address_1_error . '</p>';
                }
            ?>
        </div>
        <div>
            <label>住所（番地）</label><br>
            <input type="text" name="address_2" maxlength="100" value="<?php echo $_POST['address_2'] ?? ''; ?>">
            
            <?php
                if ($address_2_error != "") {
                    echo '<p style="color:red;">' . $address_2_error . '</p>';
                }
            ?>
        </div>
        <div>
            <label>アカウント権限</label><br>
            <select name="authority">
                <option value="0" <?php if (!isset($_POST['authority']) || $_POST['authority'] == "0") echo "selected"; ?>>一般</option>
                <option value="1" <?php if (isset($_POST['authority']) && $_POST['authority'] == "1") echo "selected"; ?>>管理者</option>
            </select>
        </div>
        <div>
            <input type="submit" value="確認する">
        </div>
    </form>
</body>
    
</html>