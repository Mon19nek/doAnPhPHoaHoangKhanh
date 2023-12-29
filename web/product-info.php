<?php
    include('./lib/config.php');
    include('./lib/function.php');
    $i = 0;
    session_start();
    $arr = array(array());
    if (isset($_POST['them'])) {
        if (!isset($_SESSION['arr'])) {
            $arr[0][0] = 1;
            $arr[0][1] = $_POST['ten'];
            $arr[0][2] = $_POST['dongia'];
            $arr[0][3] = $_POST['soluong'];
            $arr[0][4] = $_POST['dongia'] * $_POST['soluong'];
            $_SESSION['arr'] = $arr;
        }else{
            $arr = $_SESSION['arr'];
            $i = count($arr);
            $arr[$i][0] = $i + 1;
            $arr[$i][1] = $_POST['ten'];
            $arr[$i][2] = $_POST['dongia'];
            $arr[$i][3] = $_POST['soluong'];
            $arr[$i][4] = $_POST['dongia'] * $_POST['soluong'];
            $_SESSION['arr'] = $arr;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Sách DT</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="./asset/css/cart/style.css" />
    <link rel="stylesheet" href="./asset/css/cart/chitietsp.css" />
    <link rel="stylesheet" href="./asset/css/chunhapnhay.css">

    <script src="./asset/js/cart.js"></script>
</head>

<body>
    <!-- header -->
    <header>
        <nav>
            <div class="img-nav">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="index.php">Trang Truyện</a></li>
                    <li><a href="pay.php">Giỏ hàng</a></li>
                    <li><a href="register.php">Đăng ký</a></li>
                    <li><a href="login.php">Đăng nhập</a></li>
                </ul>
                <form action="cart.php?key=search">
                    <input type="text" name="search" placeholder="Tìm kiếm sách..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- The Modal -->
            <a href="pay.php"><button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng: <?php if(isset($_SESSION['arr'])) echo (count($_SESSION['arr']) .' Loại sách'); else echo 'Trống!'; ?>
            </button></a>
            <!-- <div id="myModal" class="modal" style="display: block";>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                        <div class="cart-items">

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price">0VNĐ</span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <button type="button" class="btn btn-primary order">Thanh Toán</button>
                    </div>
                </div>
            </div> -->
        </nav>
    </header>
    <!-- content -->
    <div class="chunhapnhay tieude">CÁC SÁCH ĐANG ĐƯỢC BÁN CHẠY</div>
    <section class="wrapper">
        <div class="products">
            <ul>
                <?php 
                    $str = "SELECT * FROM cart";
                    $query = $conn -> query($str);
                    $result = '';
                    while ($r = $query -> fetch_assoc()) {
                        if($r['id']%4 != 0){
                            $result .= ' <li class="main-product">
                            <div class="img-product">
                                <img class="img-prd" id="img'.$r['id'].'"
                                    src="./asset/img/cart/'.$r['thumbnail1'].'"
                                    alt="">
                            </div>
                            <div class="content-product">
                                <h3 class="content-product-h3 chunhapnhaynhe">'.$r['name'].'</h3>
                                <div class="content-product-deltals">
                                    <div class="price">
                                        <span class="money">'.$r['price'].'VND</span>
                                    </div>
                                    <form action="" method="post">
                                        <input type="hidden" name="ten" value="'.$r['name'].'" id="">
                                        <input type="hidden" name="dongia" value="'.$r['price'].'" id="">
                                        <input type="number" name="soluong" min="1" value="1" max = "10" id="">
                                        <button type="submit" name="them"  class="btn btn-cart">Add</button>
                                    </form>
                                </div>
                            </div>
                        </li>';
                        }  else {
                            $result .= ' <li class="main-product no-margin">
                            <div class="img-product">
                                <img class="img-prd" id="img'.$r['id'].'"
                                    src="./asset/img/cart/'.$r['thumbnail1'].'"
                                    alt="">
                            </div>
                            <div class="content-product">
                                <h3 class="content-product-h3 chunhapnhaynhe">'.$r['name'].'</h3>
                                <div class="content-product-deltals">
                                    <div class="price">
                                        <span class="money">'.$r['price'].'VND</span>
                                    </div>
                                    <form action="" method="post">
                                        <input type="hidden" name="ten" value="'.$r['name'].'" id="">
                                        <input type="hidden" name="dongia" value="'.$r['price'].'" id="">
                                        <input type="number" name="soluong" min="1" value="1" max = "10" id="">
                                        <button type="submit" name="them"  class="btn btn-cart">Add</button>
                                    </form>
                                </div>
                            </div>
                        </li>';
                        }
                    }
                    echo $result;
                ?>
            </ul>
        </div>
    </section>
    <?php chiTietSach($conn); ?>
     <!-- footer -->
     <footer>
        <div class="footer-item">
            <div class="img-footer">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="social-footer">
                <li><a target="_blank" href="https://www.facebook.com">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a></li>
                <li><a target="_blank" href="https://github.com">
                        <i class="fa fa-github-square" aria-hidden="true"></i>
                    </a></li>
            </div>
        </div>
    </footer>
</body>
</html>