<?php 
    include('./lib/config.php');
    include('./lib/function.php');
    if (isset($_GET['khachhang'])) {
        $id = $_GET['khachhang'];
        $s = "Select * from khachhang where id = $id";
        $qr = $conn -> query($s);
        $r = $qr -> fetch_assoc();
    }
    session_start();
    $arr = $_SESSION['arr'];
    for ($k=0; $k < count($arr) ; $k++) { 
        $arr[$k][0] = $k + 1;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['ten'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $email = $_POST['email'];
        $ds = $_POST['list'];
        $giamgia = $_POST['giamgia'];
        $sumpay = $_POST['sum'];
        $s = "INSERT INTO `order` VALUES (NULL, '$name', '$sdt', '$diachi', '$email','$ds', '$giamgia', '$sumpay','0')";
        $qr = $conn -> query($s);
        if ($qr) {
            echo '<script>alert("Đơn hàng được đặt thành thành công!")</script>';
            $id = $_GET['khachhang'];
            header("refresh: 1; url = ./cart.php?khachhang=$id");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/cart/order.css">
    <link rel="stylesheet" href="./asset/css/cart/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-exampleHash" crossorigin="anonymous" />
</head>
<body>
<header>
        <nav>
            <div class="img-nav">
                <img src="asset/img/Home/logo.png" alt=""  />
            </div>
            <div class="content-nav">
                <ul style="margin-top: 5px">
                    <li><a href="index.php">Trang Truyện</a></li>
                    <li><a href="pay.php">Giỏ hàng</a></li>
                    <li><a href="register.php">Đăng ký</a></li>
                    <li><a href="login.php">Đăng nhập</a></li>
                </ul>
            </div>
            <?php 
                if (isset($_GET['khachhang'])) {
                    $idKH = $_GET['khachhang'];
                    $str_Kh = "SELECT * FROM khachhang WHERE id = $idKH ";
                    $qr_Kh = $conn -> query($str_Kh);
                    $row_kh = $qr_Kh -> fetch_assoc();
                    echo '<div class="formten" style="margin-left: 100px">Hello <b>'.$row_kh['fullname'].'</b>&ensp;<a href="pay.php">Đăng xuất </a></div>';
                }else{
                    echo '<div class="formkhachhang">
                    <button style="border-radius: 5px;"><a href="./register.php">Đăng ký</a></button>
                    <button style="border-radius: 5px;"><a href="./login.php">Đăng nhập</a></button>
                    </div>';
                }
            ?>
        </nav>
    </header>
    <div class="content m-0 p-0">
        <div class="tieudethanhtoan">Kiểm tra thông tin đơn hàng:</div>
        <form action="" method="post">
           <?php 
                if (isset($_GET['khachhang'])) {
                    $s = printListSp($conn, $arr);
                    echo ' <div><label for="">Họ và tên:</label></div>
                    <input type="text" value="'.$r['fullname'].'" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Số điện thoại:</label></div>
                    <input type="text" value="'.$r['numberphone'].'" name="sdt" id="">
                    <br> <br> <br>
                    <div><label for="">Địa chỉ:</label></div>
                    <textarea  style="height: 50px; width: 500px"  type="text" name="diachi" id="">'.$r['address'].'</textarea>
                    <br> <br> <br>
                    <div><label for="">Email:</label></div>
                    <input type="text" value="'.$r['email'].'" name="email" id="">
                    <br> <br> <br>
                    <div><label for="">Danh mục sản phẩm:</label></div>
                    <textarea style="height: 400px; width: 500px" type="text" name="list" id="">'.$s.'</textarea>
                    <br> <br> <br>
                    <div><label for="">Số tiền giảm giá:</label></div>
                    <input type="text" name="giamgia" value="'.$_GET['giamgia'].' VND" id="">
                    <br> <br> <br>
                    <div><label for="">Thành tiền:</label></div>
                    <input type="text" name="sum" value="'.$_GET['sum'].' VND" id="">
                    <br> <br> <br>
                    <input type="submit" value="Đặt hàng">';
                }else{
                    echo ' <div><label for="">Họ và tên:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Số diện thoại:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Địa chỉ:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Danh mục sản phẩm:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Tổng giá trị:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Mã giảm giá:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Số tiền giảm giá:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>
                    <div><label for="">Thành tiền:</label></div>
                    <input type="text" name="ten" id="">
                    <br> <br> <br>';
                }
           ?>
        </form>
    </div>
    <footer>
        <div class="footer-item">
            <div class="img-footer">
                <img src="asset/img/Home/logo.png" alt="" />
            </div>
            <div class="social-footer">
                <li><a target="_blank" href="https://www.facebook.com">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a></li>
                <li><a target="_blank" href="https://github.com">
                <i class="fab fa-github" aria-hidden="true"></i>       
                    </a></li>
            </div>
        </div>
    </footer>
</body>
</html>