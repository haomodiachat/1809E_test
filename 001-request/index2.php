<?php

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if(isset($_REQUEST['thamso1']) && isset($_REQUEST['thamso2']))
{
    echo 'Tong:'.$val1 = $_REQUEST['thamso1'] + $_REQUEST['thamso2'];
    echo '<br>';

    echo 'Hiệu:'.$val2 = $_REQUEST['thamso1'] - $_REQUEST['thamso2'];
    echo '<br>';

    echo 'Tích:'.$val3 = $_REQUEST['thamso1'] * $_REQUEST['thamso2'];
    echo '<br>';

    echo 'Thương:'.$val4 = $_REQUEST['thamso1'] / $_REQUEST['thamso2'];
    echo '<br>';
}
else {
    echo "ERRROR";
}