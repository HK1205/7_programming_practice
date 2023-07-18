<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="CSS/confirm.css">
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
    <h2>アカウント削除確認画面</h2>
    <h1>本当に削除してよろしいでしょうか？</h1>
    <button onClick="location.href='http://localhost/accounts/delete.php'">前に戻る</button>
    <button onClick="location.href='http://localhost/accounts/delete_complete.php'">削除する</button>
    </div>
</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>
</html>