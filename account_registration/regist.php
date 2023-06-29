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
     <div class="main-container">
           <div class="left">
               <div class="headline">プログラミングに役立つ掲示板</div>
               <form method="post" action="insert.php">
               <p>入力フォーム</p>
                   <div>
                   <label>名前(姓)</label>
                   <input type="text" class="text" name="family_name" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>名前(名)</label>
                   <input type="text" class="text" name="last_name" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>カナ(姓)</label>
                   <input type="text" class="text" name="family_name_kana" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>カナ(名)</label>
                   <input type="text" class="text" name="last_name_kana" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>メールアドレス</label>
                   <input type="text" class="text" name="mail" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>パスワード</label>
                   <input type="text" class="text" name="password" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>性別</label>
                    <input type="radio" id="0" mame="gender"　checked>
                    <label for="男">男</label>
                    <input type="radio" id="1" mame="gender">
                    <label for="女">女</label>
                   </div>
                   <br>
                
                   
                   
                   
                                      


                   <input type="submit" name="submit" class="submit" value="確認する"> 
               </form>             
            </div>
        </div>
</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>
</html>