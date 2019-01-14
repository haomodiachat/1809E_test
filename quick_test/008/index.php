<?php
class Student{
    var $Ten;
    var $ngaysinh;
    var $quequan;
    var $sex;
    var $points =array();
    public function __construct($t,$n,$q,$s,$p1,$p2,$p3)
    {
        $this->Ten = $t;
        $this->ngaysinh = $n;
        $this->quequan = $q;
        $this->sex = $this->check($s);
        $this->points[] = $p1;
        $this->points[] = $p2;
        $this->points[] = $p3;
    }
    public function check($s1){
        if($s1 == 1){
            return 'Nam';
        }else{
            return 'Nu';
        }
    }
    public function getFullInfo(){
        echo $this->Ten;
        echo '<br>';
        echo $this->ngaysinh;
        echo '<br>';
        echo $this->quequan;
        echo '<br>';
        echo $this->sex;
        echo '<br>';
        foreach ($this->points as $key => $value){
            echo $value;
            echo '<br>';
        }
    }
    public function getAgeStudent(){
        $chuoi = explode('/', $this->ngaysinh);
        $ngaysinh = date($chuoi[2].'-' . $chuoi[1] . '-' . $chuoi[0] . 'H:i:s');
        $current = date('Y-m-d H:i:s');
        $ngaysinh1 = strtotime($ngaysinh);
        $current1 = strtotime($current);
        $lenght = $current1-$ngaysinh1;
        $y = (int)($lenght/(60*60*24));
        echo 'Tuoi la : ' . (int)($y/365);
    }
    public function DiemTrungBinh(){
        $dtb = 0;
        foreach ($this->points as $key => $value){
            $dtb +=$value;
        }
        return ($dtb/3);
    }
    public function XepLoai(){
        if($this->DiemTrungBinh()>8){
            return 'Giỏi';
        }elseif ($this->DiemTrungBinh() >7&& $this->DiemTrungBinh()<=8){
            return 'Khá';
        }elseif ($this->DiemTrungBinh() >5&& $this->DiemTrungBinh()<=7){
            return'Trung Bình';
        }else{
            return 'Yếu';
        }
    }
}
$student = new Student('Nguyễn Văn A','01/02/1997','HN',1,8,7,9);
echo '<br>';
echo '<br>';
echo '<br>';
$student->getFullInfo();
echo '<br>';
echo $student->DiemTrungBinh();
echo '<br>';
echo $student->XepLoai();
echo '<br>';
echo $student->getAgeStudent();
?>
