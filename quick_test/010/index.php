<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<form name="aa" method="post" action="">
    <p>
        Nhập tên :
        <input type="text" name="hoten" value="">
    </p>
    <input type="submit" value="submit">
</form>
<?php
$hoten = isset($_POST["hoten"]) ? $_POST["hoten"] : '';
if(isset($_POST["hoten"])) {
    $mang_ho_ten = explode(" ", $hoten);
    echo "<pre>";
    print_r($mang_ho_ten);
    echo "</pre>";
    $so_phan_tu = count($mang_ho_ten);

    $ho = $mang_ho_ten[0];
    echo "Họ:".$ho;
    echo '<br>';
    $ho_dem = "";
    for($i = 1; $i < ($so_phan_tu-1); $i++)
    {
        $ho_dem = $ho_dem.$so_phan_tu[$i]." ";
        echo "Họ đệm:".$ho_dem;
    }
    echo "Họ đệm:".$ho_dem;
    echo '<br>';
    $ten = $mang_ho_ten[$so_phan_tu - 1];
    echo "Tên:".$ten;

}
?>
</body>
</html>

