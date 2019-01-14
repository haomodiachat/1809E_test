<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $day = isset($_REQUEST['day']) ? (int) $_REQUEST['day'] : '';
    $month = isset($_REQUEST['month']) ? (int) $_REQUEST['month'] : '';
    $year = isset($_REQUEST['year']) ? (int) $_REQUEST['year'] : '';
    if (isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year'])) {
        $nam_hien_tai = date("Y", time());
        echo '<br> năm hiện tại:'.$nam_hien_tai;
        $nam_sinh = $_REQUEST["year"];
        echo '<br> năm sinh:'.$nam_sinh;
        $tuoi = $nam_hien_tai - $nam_sinh;
        echo '<br> Tuổi='.$tuoi;
}
?>


<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="<?php echo $day; ?>">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="<?php echo $month; ?>">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="<?php echo $year; ?>">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

</body>
</html>