<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('delete from todo where TodoID=?');
if($sql->execute([$_GET['id']])) {
echo '削除に成功しました';
echo '<form action="home.php" method="post">';
echo '<input type="submit" value="ホームに戻る">';
echo '</form>';
} else {
echo '削除に失敗しました';
echo '<form action="delete-input.php" method="post">';
echo '<input type="submit" value="削除画面に戻る">';
echo '</form>';
}
?>
</div>
<?php require 'foot.php'; ?>