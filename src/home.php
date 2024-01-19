<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
            <?php
                echo '<table>';
                echo '<tr><th>カテゴリ名</th><th>やること</th></tr>';
                $pdo=new PDO($connect, USER, PASS);
                $sql=$pdo->query('select * from todo');

                foreach ($sql as $row) {
                    echo '<tr>';
                    echo '<td>';
                    echo '<a href="category.php?Category_name=', $row['Category_name'], '">', $row['Category_name'], '</a>';
                    echo '</td>';
                    echo '<td>', $row['Todo'], '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </div>
    </div>
<?php require 'foot.php'; ?>