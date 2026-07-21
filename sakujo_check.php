<!doctype html">
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ＰＨＰ基礎</title>
</head>
<body>

<?php
$id=$_POST['id'];
$id= htmlspecialchars($id);

if($id=='')
{
     print'idが入力されていません。<br>';
}
else
{
     print 'id：';
     print $id;
     print '<br>';
}

if($id=='')
{
     print'<form>';
     print'<input type="button" onclick="history.back()" value="戻る">';
     print'</form>';
}
else
{
     print'<form method="post"action="sakujo.php">';
     print'<input name="id"type="hidden"value="'.$id.'">';
     print'<input type="button"onclick="history.back()"value="戻る">';
     print'<input type="submit"value="OK">';
     print'</form>';
}
?>

</body>
</html>
