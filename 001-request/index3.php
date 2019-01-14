<?php

?>
<html>
    <head>

    </head>
    <body>
        <form name="converdungluong" action="post">
            <p>
                <label>Gigabyte:</label>
                <input type="text" name="capcity" value="<?php
                if (isset($_REQUEST['capacity'])){
                    echo $_REQUEST['capacity'];
                }else{
                    echo '';
                }
                ?>" placeholder="nhap vao dung luong can chuyen gigabyte">
            </p>
            <p>
                <input type="submit" name="submit" value="submit">
            </p>
        </form>
    </body>
</html>
<?php
if (isset($_REQUEST['capcity'])) {
echo 'megabyte:'.$val = $_REQUEST['capcity']*1024;
echo 'byte:'.$val1 = $_REQUEST['capcity']*1024*1024;
echo 'bit:'.$val2 = $_REQUEST['capcity']*1024*1024*1024;
}
else {
    echo 'ERROR';
}
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>

