<!DOCTYPE html>
<h1>参加者登録フォーム</h1>
<?php echo $_GET['keyword']; ?>
<form action="./name_confirm.php" method="post">
  名前を入力：<input type="text" name="yourname">
  <input type="submit" value="登録する">
</form>
<a href='./show_name.php'>参加者のお名前一覧はこちら<br></a>
<a href='./menu.php'>メニュー画面</a>
</body>
</html>
