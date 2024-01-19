<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
    <table>
        <tr><th>カテゴリ名</th><th>やること</th><th></th></tr>
        <?php
        $pdo = new PDO($connect, USER, PASS);
        foreach ($pdo->query('select * from todo') as $row) {
            echo '<tr>';
            echo '<td>', $row['Category_name'], '</td>';
            echo '<td>', $row['Todo'], '</td>';
            echo '<td>';
            echo '<a href="delete-output.php?id=', $row['TodoID'], '">削除</a>';
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }
        ?>
    </table>
</div>
<?php require 'foot.php'; ?>