<?php
include "./model/pdo.php";
include "./view/header.php";
include "../model/taikhoan.php";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'gioithieu':
            include "./view/gioithieu.php";
            break;
        case 'lienhe':
            include "./view/lienhe.php";
            break;
        case 'home':
            include "./view/home.php";
            break;
        case 'dangnhap':
               include "./tai_khoan/dangnhap.php";
               break;
        case 'dangky':
                include "./tai_khoan/dangky.html";
             




            // if(isset($_POST["dangnhap"])){
            //     $email = $_POST["email"];
            //     $password = $_POST["password"];
            //     $rows = taikhoan($email, $password);
            //     if(sizeof($rows)==1){
            //         $_SESSION["loged"] = true;
            //         $thongbao = "Đăng nhập thành công 🎉";
            //     }
            //     else{
            //         $thongbao = "Đăng nhập thất bại thành công 🎉";
            //     }
            // } elseif (isset($_POST["dangky"])) {
            //     $tentaikhoan = $_POST["tentaikhoan"];
            //     $email = $_POST["email"];
            //     $matkhau = $_POST["matkhau"];
            //     dangky($tentaikhoan, $email, $matkhau);
			// 	setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
            // }
            // include "./view/tai_khoan/dangnhap.php";
            break;
        default:
            include "./view/home.php";
            break;
    }
} else {
    include "./view/home.php";
}
include "./view/footer.php";
