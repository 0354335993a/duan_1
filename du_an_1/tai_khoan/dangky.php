<?php
require_once "../conect/conect.php";

if (isset($_POST['dangky']) && ($_POST['dangky'])) {
   $email = $_POST['email'];
   $diachi = $_POST['diachi'];
   $sdt = $_POST['sdt'];
   $psw = $_POST['psw'];
    
    $sql = "INSERT INTO `taikhoan`( `matkhau`, `email`, `diachi`, `sdt`) VALUES ('$email','$diachi','$sdt','$psw')";

    mysqli_query($ketnoi,$sql);
}

?>