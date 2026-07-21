<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>会員変更画面</title>
</head>
<body>
<?php
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$address=$_POST['address'];
$id= htmlspecialchars($id);
$name= htmlspecialchars($name);
$pass= htmlspecialchars($pass);
$email= htmlspecialchars($email);
$address= htmlspecialchars($address);

$dbh=new PDO('sqlite:kadai.db');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->exec('CREATE TABLE IF NOT EXISTS member(id INTEGER PRIMARY KEY,name TEXT,pass TEXT,email TEXT,address TEXT)');

$sql='UPDATE member SET name=?, pass=?, email=?, address=? WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$name;
$data[]=$pass;
$data[]=$email;
$data[]=$address;
$data[]=$id;
$stmt->execute($data);

$dbh=null;

print '下記内容で変更しました。<br><br><br>';
print '氏名：';
print $name;
print '<br><br>';
print 'パスワード：';
print $pass;
print '<br><br>';
print 'メールアドレス：';
print $email;
print '<br><br>';
print '住所：';
print $address;
?>
</body>
</html>
