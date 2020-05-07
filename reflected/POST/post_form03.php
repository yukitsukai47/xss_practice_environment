<?php
$name = @$_POST['name'];
$mail = @$_POST['mail'];
$gender = @$_POST['gender'];
// ここで登録処理が入る
?>
<html>
    <head><title>登録完了</title></head>
    <body>
	<script>
	var url = location.href;
	document.write(url)
	</script><br>

        氏名:<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?><BR>
        メールアドレス:<?php echo $mail; ?><BR>
        性別:<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?><BR>
        登録されました<br>
        <a href="/xss/web/1/post_form01.php">戻る</a><br>
    </body>
</html>
