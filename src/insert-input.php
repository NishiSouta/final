<?php require 'dbconnect.php'; ?>
<?php require 'head.php'; ?>
<div class="main">
<form action="insert-output.php" method="post">
    カテゴリ名
<select name="category">
  <option value="1">人生</option>
  <option value="2">就活</option>
  <option value="3">恋愛</option>
</select>
    やること<input type="text" name="todo">
    <input type="submit" value="追加">
</form>
</div>
<?php require 'foot.php'; ?>