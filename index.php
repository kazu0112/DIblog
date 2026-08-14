<!DOCTYPE html>
<html lang="ja">

    <head>
    <meta charset="UTF-8">
    <title>diworksblog 提示版</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
<body>
    
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt=$pdo->query("select * from diworks_keijiban");
    
    ?>

    <img src="diblog_logo.jpg">
    
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    
    <main>
        <div class="main-container">
            <div class="right">
                <h1>プログラミングに役立つ提示版</h1>
                <form method="post"action="insert.php">
                <h2>入力フォーム</h2>
                    <div>
                        <lable>ハンドルネーム</lable><br>
                        <input type="text" calss="text" size="35" name="handlename">
                    </div>                    
                    <div>
                        <lable>タイトル</lable><br>
                        <input type="text" calss="text" size="35" name="title">
                    </div>
                    <div>
                        <lable>コメント</lable><br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>
                    
                    <div>
                        <input type="submit" class="submit" value="送信する">
                    </div>
                </form>
                
                <?php
                
                while($row = $stmt->fetch()){
                    
                echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                    echo"<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by" .$row['handlename']."</div>";
                    echo"</div>";
                echo"</div>";
                }
                
                ?>
            </div>
            
            <div class="left">
                <h3>人気の記事</h3>
                    <div class="abc">
                        PHPオススメ本<br>
                        PHP MyAdminの使い方<br>
                        いま人気のエディタTop5<br>
                        HTMLの基礎<br>
                    </div>
                <h3>オススメリンク</h3>
                    <div class="abc">
                        ディーアイワークス株式会社<br>
                        XAMPPのダウンロード<br>
                        Eclipseのダウンロード<br>
                        Braketsのダウンロード<br>
                    </div>
                <h3>カテゴリ</h3>
                    <div class="abc">
                        HTML<br>
                        PHP<br>
                        MySQL<br>
                        javaScript<br>
                    </div>
            </div>
        </div>
    </main>
        <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
        </footer>