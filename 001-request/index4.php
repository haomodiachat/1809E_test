<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
       $day = isset($_REQUEST["day"]) ? $_REQUEST["day"] : '';
       $month = isset($_REQUEST["month"]) ? $_REQUEST["month"] : '';
       $day = isset($_REQUEST["year"]) ? $_REQUEST["year"] : '';
       if(isset($_REQUEST["day"]) && isset($_REQUEST["month"]) && isset($_REQUEST["year"]))
       {
           $current_day_timestamp = time();
           $current_day = date("d/m/y", time());
           echo "current_day_timetamps".$current_day_timestamp;
           echo "<br>";
           echo "ngay, thang, nam hien tai:". $current_day;
           echo "<br>";
           $birthday = $day."/".$month."/".date("y",time());
           echo "sinh nhat trong nam nay:".$birthday;
           echo "<br>";
           $dtime = DateTime::createFromFormat("d/m/Y", $birthday);
           $timestamp = $dtime->getTimestamp();
           echo "sinh nhat trong nam nay theo timetamps:".$timestamp;
           echo "<br>";
           $thoi_gian_sinh_nhat = 0;
               if($current_day_timestamp > $timestamp)
               {
                   echo "Da qua sinh nhat";
                   echo "<br>";
                   $sinh_nhat_nam_sau = $day. "/". $month."/".(date("y",time())+1);
                   echo "sinh nhat nam sau:".$sinh_nhat_nam_sau;
                   echo "<br>";
                   $next_birth = DateTime::CreateFromFormat("d/m/y",$sinh_nhat_nam_sau);
                   $next_birth_timetamps = $next_birth->getTimestamp();
                   echo "sinh nhat trong nam sau theo bien timetamps:".$next_birth_timetamps;
                   echo "<br>";
                   $thoi_gian_sinh_nhat = $next_birth_timetamps - $current_day_timestamp;

               }
               else
               {
                    echo "sap den sinh nhat:";
                   $thoi_gian_den_sinh_nhat = $timestamp - $current_day_timestamp;
                   echo "thoi gian den sinh nhat tinh theo s".$thoi_gian_den_sinh_nhat;
                   echo "<br>";
                   echo "thoi gian den sinh nhat tinh theo phut".(int)($thoi_gian_den_sinh_nhat/60);
                   echo "<br>";
                   echo "thoi gian den sinh nhat tinh theo gio".(int)($thoi_gian_den_sinh_nhat/(60*60));
                   echo "<br>";
                   echo "thoi gian den sinh nhat tinh theo ngay".(int)($thoi_gian_den_sinh_nhat/(60*60*24));
               }



       }

    ?>
    <form name="birthday" method="post">
        <p>
            <label>Nhập ngày sinh</label>
            <input type="text" name="day" value="">
        </p>
        <p>
        <label>Nhập tháng sinh</label>
        <input type="text" name="month" value="">
        </p>
        <p>
        <label>Nhập năm sinh</label>
        <input type="text" name="year" value="">
        </p>
        <input name="submit" type="submit" value="submit" >

    </form>
</body>
</html>