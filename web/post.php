<?php include("header_phu.php"); ?>
<link rel="stylesheet" href="./asset/css/post/style.css">
<div class="main">
    <div class="left">
        <?php 
            $name = $_GET['baiviet'];
            $qr = "SELECT * FROM baiviet WHERE tittle = '$name'";
            $rs = $conn -> query($qr);
            $str = '';
            while ($r = $rs -> fetch_assoc()) {
                $id = $r['user_id'];
                $qr2 = "SELECT * FROM users WHERE id = $id";
                $rs2 = $conn -> query($qr2);
                while ($r2 = $rs2 -> fetch_assoc()) {
                    $str .= ' <div class="tittle">'.$r['tittle'].'</div>
                    <div class="note">
                        <div class="oclock">
                            <img src="./asset/img/home/oclock.jpg" width="30px" height="30px" alt="">
                        </div>
                        <div class="create chu">'.$r['created_at'].'</div>
                        <div class="tacgia">
                            <img src="./asset/img/post/avt.png" width="30px" height="30px" alt="">
                        </div>
                        <div class="nametacgia chu">'.$r2['role'].'</div>
                    </div>
                    <div class="quoest">&ensp;&ensp;'.$r['quoest'].'</div>
                    <div class="img1">
                        <img src="./asset/img/post/'.$r['thumbnail'].'" width = "500px" height="300px" alt="">
                    </div>
                    <div class="doan1">&ensp;&ensp;'.$r['contentfirst'].'</div>
                    <div class="doan1">&ensp;&ensp;'.$r['contentsecond'].'</div>
                    <div class="img1">
                        <img src="./asset/img/post/'.$r['thumbnailsecond'].'" width = "500px" height="300px" alt="">
                    </div>
                    <div class="doan1">&ensp;&ensp;'.$r['contentthird'].'</div>';
                }
            }
            echo $str;
        ?>
    </div>
    <div class="right">
        <div class="tieude chunhapnhay" style="font-size: 1.4rem">Đang cháy hàng!</div>
        <a href="cart.php"> <div class="qc1">
            <img id="changeImg" src="./asset/img/ad/advance/thegian.jpg" width="100%" height="100%" alt="">
        </div></a>
        <div class="qc1">
            <img src="./asset/img/ad/advance/khac1.jpg" width="100%" height="100%" alt="">
        </div>
    </div>
</div>
<?php include("footer.php"); ?>