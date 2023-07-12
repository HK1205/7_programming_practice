<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$rows = $pdo->query('select * from registration order by id desc');


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
<br>
<br>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
<tr>
<th>ID</th><th>名前(姓)</th><th>名前(名)</th><th>カナ(姓)</th><th>カナ(名)</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>更新日時</th><th colspan="2">操作</th>
</tr>
<?php
while($row = $rows->fetch()){
    echo "<tr>";
    echo "<td align='center'>";
    echo $row['id'];
    echo "</td>";
    echo "<td align='center'>";
    echo $row['family_name'];
    echo "</td>";
    echo "<td align='center'>";
    echo $row['last_name'];
    echo "</td>";
    echo "<td align='center'>";
    echo $row['family_name_kana'];
    echo "</td>";
    echo "<td align='center'>";
    echo $row['last_name_kana'];
    echo "</td>";
    echo "<td align='center'>";
    echo $row['mail'];
    echo "</td>";
    echo "<td align='center'>";
    if($row['gender'] == 0){
    echo "男";
    }else{
    echo "女";
    }
    echo "</td>";
    echo "<td align='center'>";
    if($row['authority'] == 0){
    echo "一般";
    }else{
    echo "管理者";
    }
    echo "</td>";
    echo "<td align='center'>";
    if($row['delete_flag'] == 0){
    echo "有効";
    }else{
    echo "無効";
    }
    echo "</td>";
    echo "<td align='center'>";
    $date1 = new Datetime($row['registered_time']);
    echo $date1->format('Y/m/d');
    echo "</td>";
    echo "<td align='center'>";
    $date2 = new Datetime($row['update_time']);
    echo $date2->format('Y/m/d');
    echo "</td>";
    echo "<td align='center'>";
    echo '<button onClick="location.href=\'http://localhost/accounts/update.php\'">更新</button>';
    echo "</td>";
    echo "<td align='center'>";
    echo '<button onClick="location.href=\'http://localhost/accounts/delete.php\'">削除</button>';
    echo "</td>";
    echo "</tr>";
} 
?>
</table>
    


</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>