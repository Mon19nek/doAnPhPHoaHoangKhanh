<?php 
    include('./lib/config.php');
    include('./lib/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>

    <link rel="stylesheet" href="./asset/css/cart/style.css" />
    <link rel="stylesheet" href="./asset/css/cart/pay.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<header>
        <nav>
            <div class="img-nav">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="content-nav">
                <ul style="margin-top: 10px">
                    <li><a href="index.php">Trang Truyện</a></li>
                    <li><a href="cart.php">Shop truyện</a></li>
                    <li><a href="register.php">Đăng ký</a></li>
                    <li><a href="login.php">Đăng nhập</a></li>
                </ul>
                <!-- <form>
                    <input type="text" name="search" placeholder="Tìm kiếm sách..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form> -->
            </div>
            <?php 
                if (isset($_GET['khachhang'])) {
                    $idKH = $_GET['khachhang'];
                    $str_Kh = "SELECT * FROM khachhang WHERE id = $idKH ";
                    $qr_Kh = $conn -> query($str_Kh);
                    $row_kh = $qr_Kh -> fetch_assoc();
                    echo '<div class="formten" style="margin-left: 150px">Hello <b>'.$row_kh['fullname'].'</b>&ensp;<a href="pay.php">Đăng xuất </a></div>';
                }else{
                    echo '<div class="formkhachhang">
                    <button style="border-radius: 5px;"><a href="./register.php">Đăng ký</a></button>
                    <button style="border-radius: 5px;"><a href="./login.php">Đăng nhập</a></button>
                    </div>';
                }
            ?>
        </nav>
    </header>
    <!-- Main -->
   <?php 
    session_start();
    if (isset($_SESSION['arr'])) {
        if (!isset($_POST['delete'])) {
            $arr = $_SESSION['arr'];
            $t;
            $delete;
            if (isset($_POST['dltid'])) {
                for ($k=0; $k < count($_SESSION['arr']); $k++) { 
                    if ($_SESSION['arr'][$k][5] == $_POST['dltid']) {
                        $delete = $k;
                        break;
                    }
                }
                \array_splice($_SESSION['arr'], $delete, 1);
                // echo "<script>alert('Delete thành công!')</script>";
                $arr = $_SESSION['arr'];
                for ($k=0; $k < count($arr) ; $k++) { 
                    $arr[$k][0] = $k + 1;
                }
            }
            if (isset($_POST['update']) && isset($_POST['soluongUpdate'])) {
                $idUpdate = $_POST['update'];
                $soLuong = $_POST['soluongUpdate'];
                for ($k=0; $k < count($_SESSION['arr']); $k++) { 
                    if ($_SESSION['arr'][$k][5] == $idUpdate) {
                        $_SESSION['arr'][$k][3] = $soLuong;
                        $_SESSION['arr'][$k][4] = $_SESSION['arr'][$k][2] * $_SESSION['arr'][$k][3];
                        // echo "<script>alert('Update số lượng thành công!')</script>";
                        break;
                    }
                }
                $arr = $_SESSION['arr'];
                for ($k=0; $k < count($arr) ; $k++) { 
                    $arr[$k][0] = $k + 1;
                }
            }
            if (count($_SESSION['arr']) != 0) {
                for ($k=0; $k < count($arr) ; $k++) { 
                    $arr[$k][0] = $k + 1;
                }
                echo "<h2>Giá trị đơn hàng </h2><br/>";
                echo "<table id='tb' border = 1 class='table table-primary table-bordered border-primary table-striped'><tr><th>STT</th><th>Tên Hàng</th><th>Hình ảnh</th><th>Đơn giá</th><th>Số lượng</th><th>Thành tiền</th><th>Xoá</th></tr>";
                for ($j = 0; $j < count($arr); $j++) {
                    echo '<tr><td>'.$arr[$j][0].'</td><td>'.$arr[$j][1].'</td><td><div style="display: flex;  justify-content: center;"><img src="./asset/img/cart/'.getHinhAnh($conn, $arr[$j][5]).'" width="50px" height="70px"></div></td><td>'.$arr[$j][2].'</td><td><form action="" method="post" style="display: flex;  justify-content: center;"><input type="hidden" name="update" value="'.$arr[$j][5].'"><input type="number" name="soluongUpdate" min="1" value="'.$arr[$j][3].'" max = "50" id="">&ensp;<button>Update</button></form></td><td>'.$arr[$j][4].' VND</td><td><form action ="" method ="post"><input type="hidden" name="dltid" value="'.$arr[$j][5].'"><button>Delete</buton></form></td></tr>';
                }
                $sum = 0;
                for ($i=0; $i < count($arr); $i++) { 
                    $sum += $arr[$i][4];
                }
                echo "<tr><td><b>Tổng</b></td><td></td><td></td><td></td><td></td><td>$sum VND</td><td></td></tr>";
                echo '</table>';
            }else {
                echo "Giỏ hàng rỗng!";
                session_destroy();
                unset($_SESSION['arr']);
            }
        }else {
            echo "Giỏ hàng rỗng!";
            session_destroy();
            unset($_SESSION['arr']);
        } 
    }
    // if (isset($_POST['dlt'])) {
    //     echo $_POST['id'];
    //     unset($arr[$_POST['id']]);
    // }
   ?>
   <!-- <div class="thongtin" id="tt">
       <div class="ten">
           <label for="">Họ và tên:</label>
           <input type="text" name="" id="">
       </div>
       <div class="ten">
           <label for="">Địa chỉ:</label>
           <input type="text" name="" id="">
       </div>
       <div class="ten">
           <label for="">Số tiền</label>
           <div id="sotien"></div>
       </div>
   </div> -->
   <table style="float:right;" class="btn btn-danger" id="table">
        <tr>
            <th>Tổng</th>
            <th><?php if(isset($sum))echo $sum.' VND';else echo '0VND'; ?></th>
            <th></th>
        </tr>
        <tr>
            <td>Nhập mã giảm giá(Nếu có)</td>
                <form action="" method="post">
                    <td><input type="text" name="magiamgia"></td>
                    <td><input style="background-color: blue; color: white; border-radius: 5px;" type="submit" name="mgg" value="áp dụng"></td>
                <form>
        </tr>
       <tr>
           <td>Thanh toán</td>
           <td>
               <?php
                    if(isset($sum)){
                        if (isset($_POST['mgg'])) {
                            if(isset($_POST['magiamgia'])){
                                $giam = checkMaGiamGia($conn, $_POST['magiamgia']);
                                    $new = $sum - $sum * $giam / 100;
                                    echo $new.' VND';
                            }else{
                                echo $sum.' VND';
                            }
                        }else{
                            echo $sum.' VND';
                        }
                    }else{
                        echo '0 VND';
                    }
               ?>
           </td>
           <td></td>
           </tr>
           <tr>
           <?php 
                $sotiengiam = 0;
                if (isset($_POST['magiamgia']) && isset($_POST['mgg']) && !isset($_POST['delete'])){
                    $sotiengiam = $sum * $giam / 100;
                    echo '
                    <td>Đã được giảm: -'.$giam.'%</td>
                    <td>'.( $sum * $giam / 100).' VND</td>
                   ';
                }
           ?>
           <td><button class="btn btn-success" style="margin-top: 10px" id="btn"><?php if (isset($_GET['khachhang']) && isset($sum)) {
               echo '<a href="order.php?khachhang='.$_GET['khachhang'].'&&sum='.$sum.'&&giamgia='.$sotiengiam.'" style="text-decoration: none; color: white;">Thanh toán</a>';
           }else{
               echo '<a href="login.php" style="text-decoration: none; color: white;">Thanh toán</a>';
           } ?></button></td>
           </tr>
    </table>
   <br><br><button class="btn btn-info"><a href ="cart.php" style="text-decoration: none; color: black;">Tiếp tục mua hàng</a></button>
    <form action="" method="post">
        <button type="submit" name="delete" value="" class="btn btn-info">Xoá giỏ hàng</button>
    </form>
</body>
</html>