<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./xss_name_form.css">
  </head>
  <body>
    <div class="split-box top-box">
      <?php include "./name_form.php"; ?>
    </div>
    <div class="split-box bottom-box">
      <iframe id="inline-frame"
              frameborder="0"
              width="900"
              height="3000"
              src="https://<ipアドレス>:4200">
      </iframe>
    </div>
</div>
</html>

