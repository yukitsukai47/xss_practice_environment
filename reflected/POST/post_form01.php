<html>
    <head><title>個人情報入力</title></head>
    <body>
	<script>
	var url = location.href;
	document.write(url)
	</script><br>

        <form action="post_form02.php" method="POST">
            氏名<input type="text" name="name"><BR>
            メールアドレス<input type="text" name="mail"><BR>
            性別<input type="radio" name="gender" value="女">女
            <input type="radio" name="gender" value="男">男<BR>
            <input type="submit" value="確認">
        </form>
    </body>
</html>
