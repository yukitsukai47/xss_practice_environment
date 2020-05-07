<form id="myform">
URL:
<script>
var url = location.href;
document.write(url)
</script><br>
    <input type="text" size="50" name=keyword  value="">
    <input type="submit" value="検索">
</form>

<body>
検索キーワード：
<?php 
echo htmlspecialchars($_GET['keyword'],ENT_QUOTES,'UTF-8');
?>
</body>

