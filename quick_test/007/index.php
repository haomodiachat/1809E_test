<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
  if(isset($_REQUEST["web"])) {
      $url = $_REQUEST["web"];
      header('location:'.$url);
}
?>

<form name="aa" method="post" action="">
    <p>
        Nhập trang web cần chuyển hướng đến :
        <input type="text" name="web" value="">
    </p>
    <input type="submit" value="Chuyển hướng">
</form>






</body>
</html>
