<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into registration(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time) values ('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."',0,NOW(),NOW());");


?>

<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style.css">
 <title>D.I.BLOG</title>
</head>
<body>
    <header>
        <img src="./picture/diblog_logo.jpg" width=15% height=15%>
        <div class="navi-bar">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>お問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
<main>  

<div class="complete">

<?php 
    if(empty($_POST['family_name']) || empty($_POST['last_name']) || empty($_POST['family_name_kana']) || empty($_POST['last_name_kana']) || empty($_POST['mail']) || empty($_POST['password']) || empty($_POST['postal_code']) || empty($_POST['prefecture']) || empty($_POST['address_1']) || empty($_POST['address_2'])){
     echo "<h1><font color='red'>エラーが発生したためアカウント登録できません。</font></h1>";
        
    }else{
        echo "<h1>登録完了しました</h1>";
    }
?>
    <input type="button" value="TOPページに戻る" onClick="location.href='http://localhost/top/index.html'">

</div>
   
</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>
</html>