<?php
include "./model/pdo.php";
    function dangky($tentaikhoan, $email, $matkhau) {
        $sql = "INSERT INTO `taikhoan`(`tentaikhoan`,`email`,`matkhau`) VALUES ('$tentaikhoan', '$email', '$matkhau')";
        pdo_execute($sql);
    }

    function taikhoan($email, $matkhau) {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email' and matkhau = '$matkhau'";
        return pdo_query($sql);
    }
?>