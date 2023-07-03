<?php
 session_start();
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
                       <table>
                        <tr>
                            <th colspan="2" align="center"><a>アカウント登録画面</a></th>
                        </tr>
                        <tr>
                            <td>名前(姓)</td>
                            <td><?php echo $_SESSION['family_name']; ?></td>
                        </tr>
                       
                        <tr>
                            <td>名前(名)</td>
                            <td><?php echo $_SESSION['last_name']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>カナ(姓)</td>
                            <td><?php echo $_SESSION['family_name_kana']; ?></td>
                        </tr>
                   
                        <tr>
                            <td>カナ(名)</td>
                            <td><?php echo $_SESSION['last_name_kana']; ?></td>
                        </tr>
                   

                        <tr>
                            <td>メールアドレス</td>
                            <td><?php echo $_SESSION['mail']; ?></td>
                        </tr>
                   
                        <tr>
                            <td>パスワード</td>
                            <td><?php echo str_repeat('●', strlen($_SESSION['password'])); ?></td>
                        </tr>
                   
                        <tr>
                        <td>性別</td>
                            <td align="left"><?php echo $_SESSION['gender']; ?></td>
                        </tr>
                   
                        <tr>
                            <td>郵便番号</td>
                            <td align="left"><?php echo $_SESSION['postal_code']; ?></td>
                        </tr>
                           
                        <tr>
                            <td>住所(都道府県)</td>
                            <td align="left"><?php echo $_SESSION['prefecture']; ?></td>
                        </tr>
                           
                        <tr>
                            <td>住所(市町区村)</td>
                            <td><?php echo $_SESSION['address_1']; ?></td>
                        </tr>
                           
                        <tr>
                            <td>住所(番地)</td>
                            <td><?php echo $_SESSION['address_2']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>アカウント権限</td>
                            <td align="left"><?php echo $_SESSION['authority']; ?></td>
                        </tr>
                        <tr>
                            <th align="center">
                            <form method="post" action="regist.php">
                            <input type="submit" name="submit" class="submit" value="前に戻る">
                            <input type=hidden value="<?php echo $_SESSION['family_name']; ?>" name="family_name">
                            <input type=hidden value="<?php echo $_SESSION['last_name']; ?>" name="last_name">
                            <input type=hidden value="<?php echo $_SESSION['family_name_kana']; ?>" name="family_name_kana">
                            <input type=hidden value="<?php echo $_SESSION['last_name_kana']; ?>" name="last_name_kana">
                            <input type=hidden value="<?php echo $_SESSION['mail']; ?>" name="mail">
                            <input type=hidden value="<?php echo $_SESSION['password']; ?>" name="password">
                            <input type=hidden value="<?php echo $_SESSION['gender']; ?>" name="gender">
                            <input type=hidden value="<?php echo $_SESSION['postal_code']; ?>" name="postal_code">
                            <input type=hidden value="<?php echo $_SESSION['prefecture']; ?>" name="prefecture">
                            <input type=hidden value="<?php echo $_SESSION['address_1']; ?>" name="address_1">
                            <input type=hidden value="<?php echo $_SESSION['address_2']; ?>" name="address_2">
                            <input type=hidden value="<?php echo $_SESSION['authority']; ?>" name="authority">
                            </form>
                            </th>
                            
                            <th align="center">
                            <form action="regist_complete.php" method="post">
                            <input type="submit" name="submit" class="submit" value="登録する">
                            <input type=hidden value="<?php echo $_SESSION['family_name']; ?>" name="family_name">
                            <input type=hidden value="<?php echo $_SESSION['last_name']; ?>" name="last_name">
                            <input type=hidden value="<?php echo $_SESSION['family_name_kana']; ?>" name="family_name_kana">
                            <input type=hidden value="<?php echo $_SESSION['last_name_kana']; ?>" name="last_name_kana">
                            <input type=hidden value="<?php echo $_SESSION['mail']; ?>" name="mail">
                            <input type=hidden value="<?php echo $_SESSION['password']; ?>" name="password">
                            <input type=hidden value="<?php echo $_SESSION['gender']; ?>" name="gender">
                            <input type=hidden value="<?php echo $_SESSION['postal_code']; ?>" name="postal_code">
                            <input type=hidden value="<?php echo $_SESSION['prefecture']; ?>" name="prefecture">
                            <input type=hidden value="<?php echo $_SESSION['address_1']; ?>" name="address_1">
                            <input type=hidden value="<?php echo $_SESSION['address_2']; ?>" name="address_2">
                            <input type=hidden value="<?php echo $_SESSION['authority']; ?>" name="authority">
                            </form>
                            </th>
                        </tr>
                    </table>           
</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>
</html>