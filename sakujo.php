<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ＰＨＰ基礎</title>
</head>
<body>

<?php
$id=$_POST['id'];

$dbh=new PDO('sqlite:phpkiso.db');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->exec('CREATE TABLE IF NOT EXISTS anketo(id INTEGER PRIMARY KEY,nickname TEXT,email TEXT,goiken TEXT)');

$sql='DELETE FROM anketo WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$id;
$stmt->execute($data);

print 'ご意見を削除しました';

$dbh=null;
?>
<br/>
<a href="sakujo.html">削除画面に戻る</a>
</body>
</html>
