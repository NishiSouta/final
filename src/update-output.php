<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
<?php
$pdo = new PDO($connect, USER, PASS);

// フラグを初期化
$updated = false;

// 'name'フィールドが指定された配列に含まれていない場合
if (!in_array($_POST['name'][0], ['人生', '就活', '恋愛'])) {
    echo '3つのカテゴリからいずれかを入力してください。';
} else if (empty($_POST['todo'][0])) {
    echo 'やることを入力してください。';
} else {
    $sql = $pdo->prepare('update todo set Category_name=?, todo=? where TodoID=?');

    // $_POST内の配列を反復処理
    foreach ($_POST['name'] as $key => $value) {
        if ($sql->execute([$value, $_POST['todo'][$key], $_POST['TodoID'][$key]])) {
            // 一度だけ更新しましたメッセージを表示
            if (!$updated) {
                echo '更新しました。';
                echo '<form action="home.php" method="post">';
                echo '<input type="submit" value="ホームに戻る">';
                echo '</form>';
                $updated = true;
            }
        } else {
            echo '更新できませんでした。';
            echo '<form action="update-input.php" method="post">';
            echo '<input type="submit" value="更新画面に戻る">';
            echo '</form>';
        }
    }
}
?>
</div>
<?php require 'foot.php'; ?>