<?php  include("../lib/config.php"); ?>
<?php include("../lib/function.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ quản lý bài viết</title>
    <link rel="stylesheet" href="../asset/css/category/style.css">
</head>
<body>
    <div class="container">
    <div class="sidebar">
            <div class="logo">
                <img src="../asset/img/infoAdmin/bg.png" heigth="50px" width="80px" alt="">
            </div>
            <a href="../index.php" style="text-decoration: none;"><div class="dashboard">
                <div class="img-dashboard">
                    <img src="../asset/img/admin/dashboard.png" style="width: 20px; height: 20px; margin-top:12px;" alt="">&ensp;Dashboard
                </div>
            </div></a>
            <div class="list">
                <div class="tieude"><img src="../asset/img/admin/mucluc.png" style="width: 20px; height: 20px;" alt="">&ensp;Thể loại</div>
                <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../categories" style="text-decoration: none;"  class="tacvu">Hiển thị</a><br>
                <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../categories/create.php" style="text-decoration: none;" class="tacvu">Thêm mới</a>
            </div>
            <div class="list">
                <div class="tieude"><img src="../asset/img/admin/mucluc.png" style="width: 20px; height: 20px;" alt="">&ensp;Bài viết</div>
                <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../posts" style="text-decoration: none;" class="tacvu">Hiển thị</a><br>
                <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../posts/create.php" style="text-decoration: none;" class="tacvu">Thêm mới</a>
            </div>
            <div class="list">
                <div class="tieude"><img src="../asset/img/admin/mucluc.png" style="width: 20px; height: 20px;" alt="">&ensp;Sản phẩm</div>
                <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../products" style="text-decoration: none;" class="tacvu">Hiển thị</a><br>
                <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../products/create.php" style="text-decoration: none;" class="tacvu">Thêm mới</a>
            </div>
           <?php 
                session_start();
                $name = '';
                if (isset($_SESSION['id'])) {
                    $id = $_SESSION['id'];
                    $s = "Select * from users where id= $id";
                    $query = $conn -> query($s);
                    while ($r_admin = $query -> fetch_assoc()) {
                        $name = $r_admin['role'];
                        $chucvu = $r_admin['chucvu'];
                        if($chucvu == "ADMIN"){
                            echo ' <div class="list">
                            <div class="tieude"><img src="../asset/img/admin/mucluc.png" style="width: 20px; height: 20px;" alt="">&ensp;User</div>
                            <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../users" style="text-decoration: none;" class="tacvu">Hiển thị</a><br>
                            <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../users/create.php" style="text-decoration: none;" class="tacvu">Thêm mới</a>
                        </div>';
                        echo ' <div class="list">
                            <div class="tieude"><img src="../asset/img/admin/mucluc.png" style="width: 20px; height: 20px;" alt="">&ensp;Order</div>
                            <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../order" style="text-decoration: none;" class="tacvu">Hiển thị</a><br>
                            <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../order/new.php" style="text-decoration: none;" class="tacvu">Các đơn mới</a><br>
                        </div>';
                        echo ' <div class="list">
                            <div class="tieude"><img src="../asset/img/admin/mucluc.png" style="width: 20px; height: 20px;" alt="">&ensp;Code</div>
                            <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../code" style="text-decoration: none;" class="tacvu">Hiển thị</a><br>
                            <img src="../asset/img/admin/move.png" style="width: 20px; height: 20px;" alt=""><a href="../code/create.php" style="text-decoration: none;" class="tacvu">Thêm mới</a><br>
                        </div>';
                        }
                    }
                }
           ?>
        </div>
        <div class="mainleft">
            <div class="header">
                <div class="tittle">QUẢN LÝ BÀI VIẾT</div>
                <div class="infoadmin">
                    <div class="img">
                        <?php 
                            if (isset($_SESSION['id'])) {
                                $id = $_SESSION['id'];
                                $str = "select * from users where id = $id";
                                $query = $conn -> query($str);
                                while ($r = $query -> fetch_assoc()) {
                                    if ($r['id'] == $id) echo '<img src="../asset/img/infoadmin/'.$r['thumbnail'].'" width="40px" height="50px" alt="">' ;                         
                                }
                            }else{
                                echo '<a href="../login.php"><button>Đăng nhập</button></a>';
                            } 
                        ?>
                    </div>
                    <div class="name">
                        Welcome: 
                        <?php 
                            if (isset($_SESSION['id'])) {
                                $id = $_SESSION['id'];
                                $str = "select * from users where id = $id";
                                $query = $conn -> query($str);
                                while ($r = $query -> fetch_assoc()) {
                                    if ($r['id'] == $id) echo $r['role'];
                                    echo '<a href="./login.php" style="text-decoration: none;">Log out</a>'  ;                            
                                }
                            }else{
                                echo '';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="nameadmin">Hello: <?php echo $name; ?></div>
            <div class="chucvuadmin">Chức vụ: <?php echo $chucvu; ?></div>
            <!-- cONTENT -->
            <div class="display">
                <table border="1" width="90%">
                    <tr>
                        <th>STT</th>
                        <th>TÊN BÀI VIẾT</th>
                        <th>QUOEST</th>
                        <th>CONTENT</th>
                        <th>THUMBNAIL1</th>
                        <th>THUMBNAIL2</th>
                        <th>NGÀY TẠO</th>
                        <th>NGÀY UPDATE</th>
                        <th>THỂ LOẠI</th>
                        <th>NGƯỜI VIẾT</th>
                        <th></th>
                    </tr>
                    <?php getBaiViet($conn); ?>
                    <tr>
                        <th>STT</th>
                        <th>TÊN BÀI VIẾT</th>
                        <th>QUOEST</th>
                        <th>CONTENT</th>
                        <th>THUMBNAIL1</th>
                        <th>THUMBNAIL2</th>
                        <th>NGÀY TẠO</th>
                        <th>NGÀY UPDATE</th>
                        <th>THỂ LOẠI</th>
                        <th>NGƯỜI VIẾT</th>
                        <th></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>