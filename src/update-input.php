<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
<form action="update-output.php" method="post">
<table>
    <tr><th>カテゴリ名</th><th>やること</th><th></th></tr>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->query('select * from todo');

    foreach ($sql as $row) {
        echo '<tr>';
        echo '<td><input type="text" name="name[]" value="', $row['Category_name'], '"></td>';
        echo '<td><input type="text" name="todo[]" value="', $row['Todo'], '"></td>';
        echo '<td><input type="hidden" name="TodoID[]" value="', $row['TodoID'], '">';
        echo '<input type="submit" value="更新"></td>';
        echo '</tr>';
    }
    ?>
</table>
</form>
</div>
<?php require 'foot.php'; ?>