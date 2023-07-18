<?php
mb_internal_encoding("utf8");

try {

session_start();
    
$error = "";
$id = $_SESSION['ID'];

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('update registration set delete_flag = 1 where id = :id');
$stmt->bindValue(":id", $id, PDO::PARAM_STR);
$stmt->execute();

}catch(PDOException $e){
    $error = "エラーが発生したためアカウント削除できません。";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="CSS/complete.css">
 <title>D.I.BLOG</title>
</head>
<body>
    <header>
        <img src="./picture/diblog_logo.jpg" width=15% height=15%>
        <div class="navi-bar">
            <ul>
                <li onClick="location.href='http://localhost/top/index.html'">トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li onClick="location.href='http://localhost/account_registration/regist.php'">アカウント登録</li>
                <li onClick="location.href='http://localhost/accounts/list.php'">アカウント一覧</li>
                <li>お問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
<main> 
    <div align="center">
    <h2>アカウント削除完了画面</h2>   
<?php 
    if($error != ""){
     echo "<h1><font color='red'>$error</font></h1>";
        
    }else{
        echo "<h1>削除完了いたしました。</h1>";
    }
?>
    <button onClick="location.href='http://localhost/top/index.html'">TOPページにもどる</button>
    </div>
</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>
</html>