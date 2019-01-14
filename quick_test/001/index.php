<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https": "http"). "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <h1><a href="<?php echo $actual_link.'?run=1' ?>">Click tạo thư mục tự động</a></h1>
    <?php
        if (isset($_GET['run']) && ($_GET['run'] == 1)) {
            echo '<br> chạy ngay';
            $path = __FILE__;
            //dirname là cha của thư mục đường dẫn truyền vào
            $dir = dirname($path);
            $target = $dir.'/demo';
            if(is_dir($target)) {
                for ($i = 1; $i < 101; $i++) {
                    if($i < 100) {
                        $name = '00'.$i;
                    }
                    elseif($i < 100) {
                        $name = '0'.$i;
                    }else {
                        $name = $i;
                    }
                    $target_subdir = $target."/".$name;
                    if(!file_exists($target_subdir)) {
                        mkdir($target_subdir,0777, true);
                        $target_subdir_file = $target_subdir.'/index.php';
                        $fp = fopen($target_subdir_file,'w');
                        fwrite($fp, '<?php echo __FILE__;?>');
                        fclose($fp);
                    }
                }
            }

        }
    ?>

</body>
</html>

