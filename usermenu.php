<?php
session_start();
 
// Authentication process ... omitted
 
if($_SESSION == 0) {
    $_SESSION['username'] = $uname;
    header('Location: usermenu.php');
    exit();
} else {
    $_SESSION['user_name'] = '';
    echo '認証エラー: ユーザ名とパスワードを確認してください。';
}
?>

Ex)認証後に表示するページ
<?php
session_start();
 
echo 'ようこそ ', $_SESSION['user_name'], ' さん。';
?>
