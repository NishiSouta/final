<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('insert into todo(CategoryID,Category_name,Todo) values(?,?,?)');
if($_POST['category'] == 1){
    $sql->execute([$_POST['category'], "人生",$_POST['todo']]);
        echo '追加しました。';
        echo '<form action="home.php" method="post">';
        echo '<input type="submit" value="ホームに戻る">';
        echo '</form>';
}else if($_POST['category'] == 2){
    $sql->execute([$_POST['category'], "就活",$_POST['todo']]);
        echo '追加しました。';
        echo '<form action="home.php" method="post">';
        echo '<input type="submit" value="ホームに戻る">';
        echo '</form>';
} else if($_POST['category'] == 3){
    $sql->execute([$_POST['category'], "恋愛",$_POST['todo']]);
        echo '追加しました。';
        echo '<form action="home.php" method="post">';
        echo '<input type="submit" value="ホームに戻る">';
        echo '</form>';
} else {
    echo '追加できませんでした。';
    echo '<form action="insert-input.php" method="post">';
    echo '<input type="submit" value="Todo追加画面に戻る">';
    echo '</form>';
}
?>
</div>
<?php require 'foot.php'; ?>