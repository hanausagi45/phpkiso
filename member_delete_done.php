<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>会員検索</title>
</head>
<body>

<?php
$id=$_POST['id'];

$dbh=new PDO('sqlite:kadai.db');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->exec('CREATE TABLE IF NOT EXISTS member(id INTEGER PRIMARY KEY,name TEXT,pass TEXT,email TEXT,address TEXT)');

$sql='DELETE FROM member WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$id;
$stmt->execute($data);

print '会員情報を削除しました';

$dbh=null;
?>
<br/>
<a href="member_delete.html">削除画面に戻る</a>
</body>
</html>
