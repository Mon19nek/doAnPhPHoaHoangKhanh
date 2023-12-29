<?php include("header_phu.php"); ?>
<link rel="stylesheet" href="./asset/css/category/style.css">
<div class="main">
    <div class="left">
        <?php  
            $tl = $_GET['theloai'];
            $query = "SELECT * FROM theloai WHERE tittle = '$tl'";
            $result = $conn -> query($query);
            $str ='';
            while ($r = $result -> fetch_assoc()) {
               $str .= ' <div class="category">'.$r['tittle'].'</div>
                        <hr>';
               $id = $r['id'];
               $query2 = "SELECT * FROM baiviet WHERE theloai_id = $id";
               $result2 = $conn -> query($query2);
               while ($r2 = $result2 -> fetch_assoc()) {
                   $str .= '<div class="onepost">
                   <div class="img">
                       <img src="./asset/img/post/'.$r2['thumbnail'].'" width="250px" height="200px" alt="">
                   </div>
                   <div class="postright">
                       <div class="tittle"><a href="post.php?baiviet='.$r2['tittle'].'" style="text-decoration: none;"><h3>'.$r2['tittle'].'<h3></a></div>
                       <div class="content">&ensp;'.$r2['quoest'].'</div>
                   </div>
               </div>';
               }
            }
            echo $str;
        ?>
    </div>
    <div class="right">
        <div class="tieude chunhapnhay" style="font-size: 1.4rem">Đang cháy hàng!</div>
        <a class="qc1" href="cart.php">
            <img id="changeImg" src="./asset/img/ad/advance/thegian.jpg" width="100%" height="100%" alt="">
        </a>
        <a class="qc1" href="cart.php">
            <img src="./asset/img/ad/advance/khac1.jpg" width="100%" height="100%" alt="">
        </a>
    </div>
</div>
<?php include("footer.php"); ?>