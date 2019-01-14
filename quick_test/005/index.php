<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $chuoi = isset($_REQUEST["chuoi"]) ? $_REQUEST["chuoi"] : '';
    if(isset($_REQUEST["chuoi"])) {
        $do_dai_chuoi = strlen($_REQUEST["chuoi"]);
        echo ' độ dài của chuỗi:'.$do_dai_chuoi;
    }

?>


<form name="" action="" method="post">
    <P>
        <label>Nhập chuỗi :</label>
        <input type="text" name="chuoi" value="<?php echo $chuoi ?>">
    </P>

    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

</body>
</html>
