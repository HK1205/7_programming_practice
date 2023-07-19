<?php

$mail = "";
$password = "";
$error = "";

if(isset($_POST['login_btn'])){
    
$mail = $_POST['mail'];
$password = $_POST['password'];

try {
mb_internal_encoding("utf8");
    
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$stmt = $pdo->prepare('select convert(AES_DECRYPT(UNHEX(password), \'cryptkey\') Using utf8) as ex_password, authority from registration where mail = :mail');
$stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);
    
if($data['ex_password'] == $password){
    session_start();
    $_SESSION['authority'] = $data['authority'];
    header('Location: http://localhost/top/index.html');
    exit();
}else{
    throw new PDOException();
}
    

}catch(PDOException $e){
    $error = "エラーが発生したためログイン情報を取得できません。";
}

}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style.css">
 <title>D.I.BLOG LOGIN</title>
</head>
<body>
    <header>
        <img src="./picture/diblog_logo.jpg" width=15% height=15%>
        <div class="navi-bar">
        </div>
    </header>
<main> 
    <?php if($error != ""): ?>
    <font color="red"><h1><?=$error?></h1></font>
    <?php else: ?>
    <div align="center" class="loginframework">
        <h3>ユーザーログイン</h3>
        <form action="" method="post">
            <div>
            <p>メールアドレス　<input type="text" name="mail" value="<?=$mail?>" size="30"></p>
            </div>
            <div>
            <p>パスワード　　　<input type="text" name="password" value="<?=$password?>" size="30"></p>
            </div>
            <div>
            <p><input type="submit" name="login_btn" value="ログイン"></p>
            </div>
        </form>
    </div>
    <?php endif; ?>
    
</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>
</html>