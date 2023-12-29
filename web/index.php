<?php include("header.php"); ?>
<?php 
    $str = "SELECT * FROM theloai";
    $result = $conn -> query($str);

    $numperpage = 2;
    $sumtl = mysqli_num_rows($result);

    $numberPage = $sumtl / $numperpage;
    if (isset($_GET['trang'])) {
        $vitri = $_GET['trang'];
    }else{
        $vitri = 0;
    }

    $vitritheloai = $vitri * $numperpage;
    
    $str_tls = "select * from theloai limit $vitritheloai,$numperpage ";
    $result_tl = $conn -> query($str_tls);

?>
        <!-- End Header -->
        <!-- Begin Slide -->
        <div class="slide">
            <div class="dieuhuong">
                <img src="./asset/img/home/left.jpg" width="50px" height="50px" onclick="back()"  alt="">
                <img src="./asset/img/home/right.jpg" width="50px" height="50px" onclick="next();" alt="">
            </div>
            <a href="cart.php"><div class="chuyen-slide" id="chuyenslide">
                <img src="./asset/img/ad/1.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/2.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/3.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/4.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/5.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/6.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/7.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/8.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/9.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/10.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/11.png" class="img" width=400px; height="250px"; alt="">
                <img src="./asset/img/ad/12.png" class="img" width=400px; height="250px"; alt="">
            </div></a>
        </div>
        <!-- End Slide -->
            <!-- Search -->
            <div class="displaysearch">
        <?php 
            if (isset($_GET['key'])) {
                if ($_GET['key'] != '') {
                    $strs = "select * from baiviet where tittle like '%".$_GET['key']."%'";
                    $qrs = $conn -> query($strs);
                    $s = '';
                    $row = mysqli_num_rows($qrs);
                    if($row == 0){
                        echo '<div class="keyS">Kết quả tìm kiếm cho: '.$_GET['key'].' </div>';
                        echo 'Xin lỗi, nhưng không có bài viết nào phù hợp với từ khoá:  '.$_GET['key'].'. Bạn vui lòng thử nhập từ khoá khác!';
                    }else{
                        $s .= '<div class="keyS">Có '.$row.' kết quả tìm kiếm cho: '.$_GET['key'].' </div>';
                        while ($rs = $qrs -> fetch_assoc()) {
                            $s .= '<div class="postSearch">
                            <div class="imgS">
                                <a href="post.php?baiviet='.$rs['tittle'].'" style="text-decoration: none;"><img src="./asset/img/post/'.$rs['thumbnail'].'" style="width: 400px; height: 200px;" alt=""></a>
                            </div>
                            <div class="mainS">
                                <a href="post.php?baiviet='.$rs['tittle'].'" style="text-decoration: none;"><div class="tittleS">'.$rs['tittle'].'</div></a>
                                <div class="contentS">'.$rs['quoest'].'</div>
                            </div>
                        </div>' ;
                        }
                        echo $s;
                    }
                }
            }
        ?>
        </div>
        <!-- Begin Body -->
        <div class="body">
            <!-- Top Post -->
            <div class="headerbody">
                <div class="headerbody_left">
                    <?php 
                        $sql = "SELECT * FROM baiviet ORDER BY created_at DESC LIMIT 1";
                        $query = $conn -> query($sql);
                        while($r = $query -> fetch_assoc()){
                            $str = '<div class="headerbody_left_top">
                                    <div class="img_top">
                                    <a href="post.php?baiviet='.$r['tittle'].'" style="text-decoration: none;"><img src="./asset/img/post/'.$r['thumbnail'].'" style="width: 90%; margin: 5%; margin-bottom: 5px; margin-left: 0px; height:50%;" alt=""></a>
                                    </div>
                                    <div class="time_top"> <img src="./asset/img/home/oclock.jpg" width="25px" height="25px" alt="">&ensp;&ensp;'.$r['created_at'].'</div>
                                    <a href="post.php?baiviet='.$r['tittle'].'" style="text-decoration: none;"><div class="tittle_top">'.$r['tittle'].'</div></a>
                                    <div class="des_topright">'.$r['quoest'].'[...]</div>';
                        }
                       echo $str;
                    ?>
                    </div>
                    <div class="headerbody_left_bottom">
                        <?php 
                              $sql = "SELECT * FROM baiviet ORDER BY created_at DESC LIMIT 3";
                              $query = $conn -> query($sql);
                              $str = '';
                              while ($r = $query -> fetch_assoc()) {
                                 $str .= '<div class="post_top3">
                                 <div class="img_top3">
                                    <a href="post.php?baiviet='.$r['tittle'].'"><img src="./asset/img/post/'.$r['thumbnail'].'" style="width: 220px; height: 120px;" alt=""></a>
                                 </div>
                                 <div class="time_top3"><img src="./asset/img/home/oclock.jpg" width="20px" height="20px" alt="">&ensp;&ensp;'.$r['created_at'].'</div>
                                 <a href="post.php?baiviet='.$r['tittle'].'" style="text-decoration: none;"><div class="tittle_top3"><b>'.$r['tittle'].'</b></div></a>
                                 <div class="des_topright">&ensp;&ensp;'.$r['quoest'].' [...]</div>
                             </div> ';
                              }
                              echo $str;
                        ?>
                    </div>
                </div>
                <div class="headerbody_right">
                    <?php 
                         
                         $sql = "SELECT * FROM baiviet ORDER BY created_at DESC LIMIT 4";
                         $query = $conn -> query($sql);
                         $str = '';
                         while ($r = $query -> fetch_assoc()) {
                            $str .= '<div class="post_topright">
                            <div class="img_topright">
                            <a href="post.php?baiviet='.$r['tittle'].'"><img src="./asset/img/post/'.$r['thumbnail'].'" width="150px" height="120px" alt=""></a>
                            </div>
                            <div class="content_topright">
                                <a href="post.php?baiviet='.$r['tittle'].'" style="text-decoration: none;"><div class="tittle_topright"><b>'.$r['tittle'].'</b></div></a>
                                <div class="time_topright"><img src="./asset/img/home/oclock.jpg" width="20px" height="20px" alt="">&ensp;&ensp;'.$r['created_at'].'</div>
                                <div class="des_topright">&ensp;&ensp;'.$r['quoest'].'[...]</div>
                            </div>
                        </div><hr> ';
                         }
                         echo $str;
                    ?>
                    
                </div>
            </div>
            <!-- End Top Post -->
            <!-- Begin Main Body -->
            <div class="mainbody">
                <div class="category">
                    <?php 
                        $string = "Select * from theloai";
                        $query = $conn -> query($string);
                        $result = '';
                        while ($r = $result_tl -> fetch_assoc()) {
                            $result .= '<div class="category_top">
                            <div class="tittle_post"><img src="./asset/img/home/thumuc.png" width="30px" height="30px" alt="">&ensp;Thể loại: <a href="category.php?theloai='.$r['tittle'].'" style="text-decoration: none;">'.$r['tittle'].'</a></div>';
                            $idtl = $r['id'];
                            $str_post = "Select * from baiviet where theloai_id = '".$idtl."'";
                            $query_post = $conn -> query($str_post);
                            while ($r_post = $query_post -> fetch_assoc()) {
                                $result .= '<div class="mainleft">
                                <div class="img_main">
                                    <a href="post.php?baiviet='.$r_post['tittle'].'" style="text-decoration: none;"><img src="./asset/img/post/'.$r_post['thumbnail'].'" width="400px" height="200px" alt=""></a>
                                </div>
                                <div class="content_main">
                                    <a href="post.php?baiviet='.$r_post['tittle'].'" style="text-decoration: none;"><div class="tittle_main"><b>'.$r_post['tittle'].'</b></div></a>
                                    <div class="time_main"><img src="./asset/img/home/oclock.jpg" width="20px" height="20px" alt="">&ensp;&ensp;'.$r_post['created_at'].'</div>
                                    <div class="des_main">&ensp;&ensp;'.$r_post['quoest'].'[..]</div>
                                </div>
                            </div>';
                            }
                        }
                        $result .= '';
                        echo $result;
                    ?>
                </div> 
                <div class="move">
                    <a href="index.php">Trang đầu</a>
                    <?php 
                        if (isset($_GET['trang'])) {
                           $index = $_GET['trang'];
                           if ($index > 0) {
                               $index -= 1;
                              echo '<a href="index.php?trang='.$index.'">Trang Trước</a>';
                           }else{
                               echo '<a href="index.php">Trang Trước</a>';
                           }
                        }else {
                            echo '<a href="index.php">Trang Trước</a>';
                        }
                    ?>
                    <?php 
                        for($n  = 0; $n < $numberPage; $n++) {
                            $t = $n + 1;
                            if (isset($_GET['trang'])) {
                                if ($n == $_GET['trang']) {
                                    echo '<a class="active" href="index.php?trang='.$n.'">'.$t.'</a>';
                                }else{
                                    echo '<a href="index.php?trang='.$n.'">'.$t.'</a>';
                                }
                            }else{
                                if($n == 0) echo '<a class="active" href="index.php?trang='.$n.'">'.$t.'</a>';
                                else echo '<a href="index.php?trang='.$n.'">'.$t.'</a>';
                            }
                        }
                    ?>
                    <?php 
                        if (isset($_GET['trang'])) {
                             $j = $_GET['trang'];
                             if ($j < $numberPage - 1) {
                                 $j += 1;
                                 echo '<a href="index.php?trang='.$j.'">Trang sau</a>';
                             }else{
                                $j = $numberPage - 1;
                                echo '<a href="index.php?trang='.$j.'">Trang sau</a>';
                             }
                        }else{
                            echo '<a href="index.php?trang=1">Trang sau</a>';
                        }
                    ?>
                    <a href="index.php?trang=<?php $j = $numberPage - 1; echo $j; ?>">Trang cuối</a>
                </div>
            </div>
            <!-- End Main Body -->
        </div>
        <!-- End Body -->
    </div>
   <!-- Begin Footer -->
   <?php require('footer.php') ?>
   <!-- End Footer -->