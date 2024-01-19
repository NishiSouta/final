<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
    <table>
        <tr><th>カテゴリ名</th><th>やること</th><th></th></tr>
        <?php
        $pdo = new PDO($connect, USER, PASS);

        // ここで表示するカテゴリを指定
        $category = $_GET['Category_name'];

        $sql = $pdo->prepare('select * from todo where Category_name = ?');
        $sql->execute([$category]);

        foreach ($sql as $row) {
            echo '<tr>';
            echo '<td>', $row['Category_name'], '</td>';
            echo '<td>', $row['Todo'], '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>
<?php require 'foot.php'; ?>