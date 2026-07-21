<!doctype html">
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員削除画面</title>
</head>
<body>

<?php
$id=$_POST['id'];
$name=htmlspecialchars($id);

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
     print'<form method="post"action="member_delete_done.php">';
     print'<input name="id"type="hidden"value="'.$id.'">';
     print'<input type="button"onclick="history.back()"value="戻る">';
     print'<input type="submit"value="OK">';
     print'</form>';
}
?>

</body>
</html>
