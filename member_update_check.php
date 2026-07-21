<!doctype html">
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員変更画面</title>
</head>
<body>

<?php
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$address=$_POST['address'];
$id=htmlspecialchars($id);
$name=htmlspecialchars($name);
$pass=htmlspecialchars($pass);
$email=htmlspecialchars($email);
$address=htmlspecialchars($address);
if($id=='')
{
     print'会員コードが入力されていません。<br>';
}
else
{
     print '会員コード：';
     print $id;
     print '<br>';
}

if($name=='')
{
     print'会員名が入力されていません。<br>';
}
else
{
     print 'ようこそ';
     print $name;
     print '様';
     print '<br>';
}

if($pass=='')
{
     print'パスワードが入力されていません。<br>';
}
else
{
     print 'パスワード：';
     print $pass;
     print '<br>';
}

if($email=='')
{
     print 'メールアドレスが入力されていません。<br>';
}
else {

     print 'メールアドレス:';
     print $email;
     print '<br>';
}

if($address=='')
{
     print '住所が入力されていません。<br>';
}
else
{
     print '住所：';
     print $address;
     print '] <br>';
}

if($id==''||$name==''||$pass==''||$email==''||$address=='')
{
     print'<form>';
     print'<input type="button" onclick="history.back()" value="戻る">';
     print'</form>';
}
else
{
     print'<form method="post"action="member_update_done.php">';
     print'<input name="id"type="hidden"value="'.$id.'">';
     print'<input name="name"type="hidden"value="'.$name.'">';
     print'<input name="pass"type="hidden"value="'.$pass.'">';
     print'<input name="email"type="hidden"value="'.$email.'">';
     print'<input name="address"type="hidden"value="'.$address.'">';
     print'<input type="button"onclick="history.back()"value="戻る">';
     print'<input type="submit"value="OK">';
     print'</form>';
}
?>

</body>
</html>
