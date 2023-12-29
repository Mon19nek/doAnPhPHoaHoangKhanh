<?php 
    function resetId($arr){
        $t = 1;
        for ($i=0; $i < count($arr) ; $i++) { 
            $arr[$i][0] = $t;
            $t++;
        }
        return $arr;
    }
    function chiTietSach($conn){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $str_prd = "Select * from cart where id = $id";
            $query_prd = $conn -> query($str_prd);
            while ($row = $query_prd -> fetch_assoc()) {
               echo ' <!-- Modal -->
               <div id="modal">
                       <div class="modal_overlay"></div>
                       <div class="modal_body">
                           <div class="tittle2">CHI TIẾT SÁCH</div>
                           <a href="./cart.php"><button id="close">X</button></a>
                           <hr>
                           <div class="modal_content">
                               <div class="img">
                                   <img src="./asset/img/cart/'.$row['thumbnail2'].'" width="220px" height="300px" alt="">
                                   <div class="tieudeimg chunhapnhaynhe">'.$row['name'].'</div>
                               </div>
                               <div class="info">
                                   <div class="ten space">Tên sách: '.$row['name'].' </div>
                                   <div class="gia space">Giá: '.$row['price'].' Đồng</div>
                                   <div class="tacgia space">Tác giả: '.$row['tacgia'].'</div>
                                   <div class="tieudegioithieu">Giới thiệu về sách:</div>
                                   <div class="gioithieu">'.$row['content1'].'</div>
                               </div>
                           </div>
                       </div>
               </div>';
            }
        }
    }
    function getHinhAnh($conn, $id){
        $s = "select * from cart where id = $id";
        $qr = $conn -> query($s);
        while ($r = $qr -> fetch_assoc()) {
            return $r['thumbnail2'];
        }
    }
    function checkMaGiamGia($conn, $mgg){
        $s = "select * from code where code = '$mgg'";
        $query = $conn -> query($s);
        $r = mysqli_num_rows($query);
        if ($r == 1) {
            $r = $query -> fetch_assoc();
            return $r['value'];
        }else{
            return 0;
        }
    }
    function xuLyLogin($conn){
        if (isset($_POST['username']) && isset($_POST['password']) ) {
            $name = $_POST['username'];
            $password = $_POST['password'];
            $str = "SELECT * FROM khachhang where username='$name' and khachhang.password='$password'";
            $result = mysqli_query($conn, $str);
            $num_rows = mysqli_num_rows($result);
            if ($num_rows == 1) {
                $row = mysqli_fetch_assoc($result);
                $ma = $row['id'];
                header("Location: cart.php?khachhang=$ma");
            }else{
                header("Location: login.php");
            }
        }
    }
    function printListSp($conn, $arr){
        $s = '';
        for ($i=0; $i < count($arr); $i++) { 
            $s .= $arr[$i][0].'. '.$arr[$i][1].'; Số lượng: '.$arr[$i][3].'; Đơn giá: '.$arr[$i][2].' VND; Thành tiền: '.$arr[$i][4].' VND';
            $s .= '    |     ';
        }
        return $s;
    }
    function getProductByNamme($s){
        
    }
?>