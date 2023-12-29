<?php 
    function getTheLoai($conn){
        $str_tl = "Select * FROM theloai";
        $query_tl = $conn -> query($str_tl);
        $s = '';
        $i = 1;
        while ($r_tl = $query_tl -> fetch_assoc()) {
            $s .= '<tr>
            <td>'.$i.'</td>
            <td>'.$r_tl['tittle'].'</td>
            <td>'.$r_tl['description'].'</td>
            <td>'.$r_tl['created_at'].'</td>
            <td>'.$r_tl['updated_at'].'</td>
            <td><a href="xuly-delete.php?idTL='.$r_tl['id'].'">Delete</a>&ensp;&ensp;<a href="edit.php?id='.$r_tl['id'].'">Edit</a></td>
        </tr>';
        $i++;
        }
        echo $s;
    }
    function addTL($conn){
        if (isset($_GET['ten']) && isset($_GET['mota']) && isset($_GET['ngaytao']) && isset($_GET['ngaycapnhat'])) {
            $ten = $_GET['ten'];
            $mota = $_GET['mota'];
            $ngaytao = $_GET['ngaytao'];
            $ngaycapnhat = $_GET['ngaycapnhat'];
            $str_add = "INSERT INTO theloai VALUES (NULL, '$ten', '$mota', '$ngaytao', '$ngaycapnhat')";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</scrip>";
            }
        }
    }
    function updateTL($conn){
        if (isset($_GET['ten']) && isset($_GET['mota']) && isset($_GET['ngaytao']) && isset($_GET['ngaycapnhat'])) {
            $ten = $_GET['ten'];
            $mota = $_GET['mota'];
            $ngaytao = $_GET['ngaytao'];
            $id = $_GET['id'];
            $ngaycapnhat = $_GET['ngaycapnhat'];
            $str_add = "UPDATE theloai SET tittle = '$ten', theloai.description = '$mota', created_at = '$ngaytao', updated_at = '$ngaycapnhat' WHERE id = $id ";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</scrip>";
            }
        }
    }
    function deleteTL($conn){
        $idTL = $_GET['idTL'];
        $str_dlt = "DELETE FROM theloai WHERE id = $idTL";
        $query_dlt = $conn -> query($str_dlt);
        if ($query_dlt) {
            header("Location: index.php");
        }else{
            echo "<script>alert('Chưa thành công');</scrip>";
        }
    }
    function getBaiViet($conn){
        $str_tl = "Select * FROM baiviet";
        $query_tl = $conn -> query($str_tl);
        $s = '';
        $i = 1;
        while ($r_tl = $query_tl -> fetch_assoc()) {
            $a = $r_tl['theloai_id'];
            $b = $r_tl['user_id'];
            $str_theloai = "SELECT * FROM theloai WHERE id = $a";
            $str_user = "SELECT * FROM users WHERE id = $b";
            $r_theloai = $conn -> query($str_theloai)->fetch_assoc();
            $r_user = $conn -> query($str_user)->fetch_assoc();
            $s .= '<tr>
            <td>'.$i.'</td>
            <td>'.$r_tl['tittle'].'</td>
            <td>'.$r_tl['quoest'].'</td>
            <td>'.$r_tl['contentfirst'].'...</td>
            <td>'.$r_tl['thumbnail'].'</td>
            <td>'.$r_tl['thumbnailsecond'].'</td>
            <td>'.$r_tl['created_at'].'</td>
            <td>'.$r_tl['updated_at'].'</td>
            <td>'.$r_theloai['tittle'].'</td>
            <td>'.$r_user['role'].'</td>
            <td><a href="action.php?idDlt='.$r_tl['id'].'">Delete</a>&ensp;&ensp;<a href="edit.php?idUpdate='.$r_tl['id'].'">Edit</a></td>
        </tr>';
        $i++;
        }
        echo $s;
    }
    function getOptionTheLoai($conn){
        $str = "SELECT * FROM theloai";
        $query = $conn -> query($str);
        $str = '';
        while ($r = $query -> fetch_assoc()) {
            $str .= '<option value ="'.$r['id'].'">'.$r['tittle'].'</option>';
        }
        echo $str;
    }
    function addBV($conn){
        if (!isset($_GET['update'])) {
            if (isset($_GET['ten']) && isset($_GET['trichdan']) && isset($_GET['doan1']) && isset($_GET['doan2'])  && isset($_GET['doan3'])
            && isset($_GET['anh1'])  && isset($_GET['anh2'])  
            && isset($_GET['ngaytao'])  && isset($_GET['ngaycapnhat'])  
            && isset($_GET['theloai']) && isset($_GET['iduser']))  {
                $ten = $_GET['ten'];
                $trichdan = $_GET['trichdan'];
                $doan1 = $_GET['doan1'];
                $doan2 = $_GET['doan2'];
                $doan3 = $_GET['doan3'];
                $anh1 = $_GET['anh1'];
                $anh2 = $_GET['anh2'];
                $ngaytao = $_GET['ngaytao'];
                $ngaycapnhat = $_GET['ngaycapnhat'];
                $theloai = $_GET['theloai'];
                $user = $_GET['iduser'];
                $str_add = "INSERT INTO baiviet VALUES (NULL, '$ten', '$trichdan', '$doan1', '$doan2','$doan3','$anh1','$anh2','$ngaytao','$ngaycapnhat','$theloai','$user')";
                $query_add = $conn -> query($str_add);
                if ($query_add) {
                    header("Location: index.php");
                }else{
                    echo "<script>alert('Chưa thành công');</script>";
                }
            }
        }
    }
    function deleteBV($conn){
        if (isset($_GET['idDlt'])) {
            $idBv = $_GET['idDlt'];
            $str_dlt = "DELETE FROM baiviet WHERE id = $idBv";
            $query_dlt = $conn -> query($str_dlt);
            if ($query_dlt) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function updateBV($conn){
        $idUpdate = $_GET['update'];
        if (isset($_GET['ten']) && isset($_GET['trichdan']) && isset($_GET['doan1']) && isset($_GET['doan2'])  && isset($_GET['doan3'])
        && isset($_GET['anh1'])  && isset($_GET['anh2'])  
        && isset($_GET['ngaytao'])  && isset($_GET['ngaycapnhat'])  
        && isset($_GET['theloai']) && isset($_GET['iduser']))  {
            $ten = $_GET['ten'];
            $trichdan = $_GET['trichdan'];
            $doan1 = $_GET['doan1'];
            $doan2 = $_GET['doan2'];
            $doan3 = $_GET['doan3'];
            $anh1 = $_GET['anh1'];
            $anh2 = $_GET['anh2'];
            $ngaytao = $_GET['ngaytao'];
            $ngaycapnhat = $_GET['ngaycapnhat'];
            $theloai = $_GET['theloai'];
            $user = $_GET['iduser'];
            $str_add = "UPDATE baiviet SET tittle = '$ten', quoest = '$trichdan', contentfirst = '$doan1', contentsecond = '$doan2', contentthird = '$doan3', thumbnail = '$anh1', thumbnailsecond = '$anh2', created_at = '$ngaytao', updated_at='$ngaycapnhat',theloai_id='$theloai', baiviet.user_id ='$user' WHERE id = $idUpdate ";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function getProducts($conn){
        $str_tl = "Select * FROM cart";
        $query_tl = $conn -> query($str_tl);
        $s = '';
        $i = 1;
        while ($r_tl = $query_tl -> fetch_assoc()) {
            $s .= '<tr>
            <td>'.$i.'</td>
            <td>'.$r_tl['name'].'</td>
            <td>'.$r_tl['price'].'</td>
            <td>'.$r_tl['thumbnail1'].'</td>
            <td>'.$r_tl['content1'].'</td>
            <td>'.$r_tl['tacgia'].'</td>
            <td><a href="action.php?idDlt='.$r_tl['id'].'">Delete</a>&ensp;&ensp;<a href="edit.php?id='.$r_tl['id'].'">Edit</a></td>
        </tr>';
        $i++;
        }
        echo $s;
    }
    function addProduct($conn){
        if (isset($_GET['ten']) && isset($_GET['gia']) && isset($_GET['anh']) && isset($_GET['gioithieu']) && isset($_GET['tacgia'])) {
            $ten = $_GET['ten'];
            $gia = $_GET['gia'];
            $anh = $_GET['anh'];
            $gioithieu = $_GET['gioithieu'];
            $tacgia = $_GET['tacgia'];
            $str_add = "INSERT INTO cart VALUES (NULL, '$ten', '$gia', '$anh', NULL, '$gioithieu', '$tacgia')";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function deleteProduct($conn){
        if (isset($_GET['idDlt'])) {
            $idBv = $_GET['idDlt'];
            $str_dlt = "DELETE FROM cart WHERE id = $idBv";
            $query_dlt = $conn -> query($str_dlt);
            if ($query_dlt) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function updateProduct($conn){
            $idUpdate = $_GET['idUpdate'];
            if (isset($_GET['tenEdit']) && isset($_GET['giaEdit']) && isset($_GET['anhEdit']) && isset($_GET['gioithieuEdit']) && isset($_GET['tacgiaEdit'])) {
                $ten = $_GET['tenEdit'];
                $gia = $_GET['giaEdit'];
                $anh = $_GET['anhEdit'];
                $gioithieu = $_GET['gioithieuEdit'];
                $tacgia = $_GET['tacgiaEdit'];
                $str_add = "UPDATE cart SET cart.name = '$ten', price = '$gia', thumbnail1 = '$anh', thumbnail2 = NULL, content1 = '$gioithieu', tacgia='$tacgia' WHERE id = $idUpdate ";
                $query_add = $conn -> query($str_add);
                if ($query_add) {
                    header("Location: index.php");
                }else{
                    echo "<script>alert('Chưa thành công');</script>";
                }
            }
    }
    function getUsers($conn){
        $str_tl = "Select * FROM users";
        $query_tl = $conn -> query($str_tl);
        $s = '';
        $i = 1;
        while ($r_tl = $query_tl -> fetch_assoc()) {
            $s .= '<tr>
            <td>'.$i.'</td>
            <td>'.$r_tl['username'].'</td>
            <td>'.$r_tl['password'].'</td>
            <td>'.$r_tl['thumbnail'].'</td>
            <td>'.$r_tl['birthday'].'</td>
            <td>'.$r_tl['role'].'</td>
            <td>'.$r_tl['chucvu'].'</td>
            <td><a href="action.php?idDlt='.$r_tl['id'].'">Delete</a>&ensp;&ensp;<a href="edit.php?id='.$r_tl['id'].'">Edit</a></td>
        </tr>';
        $i++;
        }
        echo $s;
    }
    function addUser($conn){
        if (isset($_GET['username']) && isset($_GET['pass']) && isset($_GET['anh']) && isset($_GET['ngaysinh']) && isset($_GET['ten']) && isset($_GET['chucvu'])) {
            $user = $_GET['username'];
            $pass = $_GET['pass'];
            $anh = $_GET['anh'];
            $ngaysinh = $_GET['ngaysinh'];
            $ten = $_GET['ten'];
            $chucvu = $_GET['chucvu'];
            $str_add = "INSERT INTO users VALUES (NULL, '$user', '$pass', '$anh', '$ngaysinh', '$ten', '$chucvu')";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function deleteUser($conn){
        if (isset($_GET['idDlt'])) {
            $id = $_GET['idDlt'];
            $str_dlt = "DELETE FROM users WHERE id = $id";
            $query_dlt = $conn -> query($str_dlt);
            if ($query_dlt) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function updateUser($conn){
        $idUpdate = $_GET['idUpdate'];
        if (isset($_GET['usernameEdit']) && isset($_GET['passEdit']) && isset($_GET['anhEdit']) && isset($_GET['ngaysinhEdit']) && isset($_GET['tenEdit'])  && isset($_GET['chucvuEdit'])) {
            $user = $_GET['usernameEdit'];
            $pass = $_GET['passEdit'];
            $anh = $_GET['anhEdit'];
            $ngaysinh = $_GET['ngaysinhEdit'];
            $ten = $_GET['tenEdit'];
            $chucvu = $_GET['chucvuEdit'];
            $str_add = "UPDATE users SET username = '$user', users.password = '$pass', thumbnail = '$anh', birthday = 'ngaysinh', users.role = '$ten', chucvu = '$chucvu' WHERE id = $idUpdate ";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function getOrder($conn){
        $str_tl = "Select * FROM `order`";
        $query_tl = $conn -> query($str_tl);
        $s = '';
        $i = 1;
        $stt = '';
        while ($r_tl = $query_tl -> fetch_assoc()) {
            if ($r_tl['status'] == 0) {
               $stt = "Chưa giao";
            }else{
                $stt = "Đã giao";
            }
            $s .= '<tr>
            <td>'.$i.'</td>
            <td>'.$r_tl['fullname'].'</td>
            <td>'.$r_tl['numberphone'].'</td>
            <td>'.$r_tl['address'].'</td>
            <td>'.$r_tl['email'].'</td>
            <td>'.$r_tl['order_conttent'].'</td>
            <td>'.$r_tl['sale'].'</td>
            <td>'.$r_tl['sumpay'].'</td>
            <td>'.$stt.'</td>
        </tr>';
        $i++;
        }
        echo $s;
    }
    function getOrderNew($conn){
        $str_tl = "Select * FROM `order` WHERE status = 0";
        $query_tl = $conn -> query($str_tl);
        $s = '';
        $i = 1;
        while ($r_tl = $query_tl -> fetch_assoc()) {
            $s .= '<tr>
            <td>'.$i.'</td>
            <td>'.$r_tl['fullname'].'</td>
            <td>'.$r_tl['numberphone'].'</td>
            <td>'.$r_tl['address'].'</td>
            <td>'.$r_tl['email'].'</td>
            <td>'.$r_tl['order_conttent'].'</td>
            <td>'.$r_tl['sale'].'</td>
            <td>'.$r_tl['sumpay'].'</td>
            <td><a href="action.php?idComplete='.$r_tl['id'].'">Đã giao</a></td>
        </tr>';
        $i++;
        }
        echo $s;
    }
    function getCode($conn){
        $str_tl = "Select * FROM code";
        $query_tl = $conn -> query($str_tl);
        $s = '';
        $i = 1;
        $stt = '';
        while ($r_tl = $query_tl -> fetch_assoc()) {
            $s .= '<tr>
            <td>'.$i.'</td>
            <td>'.$r_tl['code'].'</td>
            <td>'.$r_tl['name'].'</td>
            <td>'.$r_tl['value'].'%</td>
            <td><a href="action.php?idDlt='.$r_tl['id'].'">Delete</a>&ensp;&ensp;<a href="edit.php?idUpdate='.$r_tl['id'].'">Edit</a></td>
        </tr>';
        $i++;
        }
        echo $s;
    }
    function addCode($conn){
        if (isset($_GET['code']) && isset($_GET['ten']) && isset($_GET['value'])) {
            $code = $_GET['code'];
            $ten = $_GET['ten'];
            $value = $_GET['value'];
            $str_add = "INSERT INTO code VALUES (NULL, '$code', '$ten', '$value')";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function updateCode($conn){
        $idUpdate = $_GET['idUpdate'];
        if (isset($_GET['codeUd']) && isset($_GET['nameUd']) && isset($_GET['valueUd'])) {
            $code = $_GET['codeUd'];
            $name = $_GET['nameUd'];
            $value = $_GET['valueUd'];
            $str_add = "UPDATE code SET code = '$code', code.name = '$name', code.value = '$value' WHERE id = $idUpdate ";
            $query_add = $conn -> query($str_add);
            if ($query_add) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
    function deleteCode($conn){
        if (isset($_GET['idDlt'])) {
            $id = $_GET['idDlt'];
            $str_dlt = "DELETE FROM code WHERE id = $id";
            $query_dlt = $conn -> query($str_dlt);
            if ($query_dlt) {
                header("Location: index.php");
            }else{
                echo "<script>alert('Chưa thành công');</script>";
            }
        }
    }
?>