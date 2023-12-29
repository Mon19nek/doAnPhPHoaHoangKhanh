<?php 
    include('./lib/config.php');
    include('./lib/function.php');
    $name = $username = $password = $confirmpassword = $age = $email =  $phonenumber = $address = ""; 
    $nameErr = $usernameErr = $passwordErr = $confirmpasswordErr = $ageErr = $emailErr = $phonenumberErr = $addressErr = ""; 
    $t = FALSE;
    function test_input($data){ 
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;  
    } 

    function test_email($email){ 
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email)) {
            return true; 
        }else{
            return false; 
        }
    } 

    function test_age($age){
        if (($age >= 18)&&($age <=100)) {
           return true;
        }else{
            return false;
        }
    }
    function test_phonenumber($phonenumber){
        if (preg_match("/^[0-9]*$/", $phonenumber) && strlen($phonenumber) == 10) {
            return true;
        }else{
            return false;
        }
    }
    function test_pass($password){ 
        $uppercase = preg_match('@[A-Z]@', $password); 
        $lowercase = preg_match('@[a-z]@', $password); 
        $number    = preg_match('@[0-9]@', $password); 
        $specialChars = preg_match('@[^\w]@', $password); 
        if(!$uppercase || !$lowercase || !$number || !$specialChars  || strlen($password) < 8) { 
            return false; 
        }else{ 
            return true; 
        } 
    } 

   if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST['name'])) {
            $nameErr = "Trường này là trường bắt buộc!";
        }else{
            $nameEnd = $_POST['name'];
        }

        if (empty($_POST['username'])) {
            $usernameErr = "Trường này là trường bắt buộc!";
        }else{
            $username = test_input($_POST['username']);
            if (!preg_match("/^[A-Za-z0-9_\.]*$/",$username)) { 
                $usernameErr = "Chỉ chứa kí tự số và chữ!"; 
            }else{
                $usernameEnd = $username;
            } 
        }

        if(empty($_POST['email'])){
            $emailErr="Email bắt buộc nhập!"; 
        } else{ 
            $email = $_POST["email"]; 
            if(!test_email($email)) {
                $emailErr = "Email chỉ chứa dấu @ và dấu . !"; 
            }else{
                $emailEnd = $email;
            }
        }

        if(empty($_POST["age"])) {
            $ageErr="Age bắt buộc nhập!"; 
        } else { 
            $age = $_POST["age"]; 
            if(!test_age($age)) {
                $ageErr = "Age chỉ là số từ 18-100 !"; 
            }else {
                $ageEnd = $age;
            }
        } 

        if(empty($_POST["phonenumber"])) {
            $phonenumberErr="Phone Number bắt buộc nhập!"; 
        } else { 
            $phonenumber = $_POST["phonenumber"]; 
            if(!test_phonenumber($phonenumber)) 
                $phonenumberErr = "Phone Number chỉ chứa các số và có độ dài 10 số!"; 
            else
                $phonenumberEnd = $phonenumber;
        }

        if(empty($_POST["password"])) {
            $passwordErr="Password bắt buộc nhập!"; 
        } else { 
            $password = $_POST["password"]; 
            // if(!test_pass($password)) {
            //     $passwordErr = "Password dài ít nhất 8 kí tự, trong đó có ít nhất 1 kí tự hoa, 1 chữ số, 1 kí tự đặc biệt"; 
            // } else {
                $passwordEnd = $password;
            // }
        }

        if(empty($_POST["confirmpassword"])) 
            $confirmpasswordErr="Confirm Password bắt buộc nhập!"; 
        else { 
            $confirmpassword = $_POST["confirmpassword"]; 
            if($confirmpassword != $password) 
                $confirmpasswordErr = "Passwords không khớp, vui lòng kiểm tra lại!"; 
            else
                $confirmpasswordEnd = $confirmpassword;
        } 

        if(empty($_POST["address"])) 
        $addressErr="Địa chỉ bắt buộc nhập!"; 
        else { 
            $address = $_POST["address"]; 
            $addressEnd = $_POST["address"]; 
        } 
   } 
   if(isset($name) && isset($usernameEnd) && isset($passwordEnd) && isset($confirmpassword) && isset($emailEnd) && isset($ageEnd) && isset($phonenumberEnd) && isset($addressErr)){
        $str = "INSERT INTO khachhang VALUES (NULL, '$nameEnd', '$usernameEnd', '$passwordEnd', '$ageEnd','$emailEnd', '$phonenumberEnd', '$addressEnd')";
        $qr = $conn -> query($str);
        if ($qr) {
            echo '<script>alert("Đăng ký thành công! Hãy đăng nhập !")</script>';
            header("refresh: 1; url = ./login.php");
            exit();
        }else{
            echo "<script>alert('Chưa thành công');</script>";
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
    <link rel="stylesheet" href="./asset/css/chunhapnhay.css">
    <link rel="stylesheet" href="./asset/css/cart/order.css">
    <link rel="stylesheet" href="./asset/css/cart/registerr.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
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
                <!-- <form>
                    <input class="search" type="text" name="search" placeholder="Tìm kiếm sách..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form> -->
            </div>
            <div class="btn">
                <button><a href="./login.php">Đăng nhập</a></button>
            </div>
        </nav>
    </header>
    <div class="mainregister" style="background-image: url(./asset/img/register/bg.jpg);">
        <div class="left" >
            SÁCH LÀ TRI THỨC CỦA XÃ HỘI
        </div>
        <div class="right">
            <div class="tieude" style="display: flex; justify-content: center;">REGISTER FORM</div>
            <form action="" method="post">
                Họ và tên&emsp;&ensp;&emsp;&ensp;&ensp; <input type="text" name="name" value="<?php echo $name; ?>" style="width: 300px;"><span style="color:red">*<?php echo $nameErr; ?></span>
                <br><br>
                Tên đăng nhập &ensp;&ensp;&ensp;<input type="text" name="username" value="<?php echo $username; ?>" style="width: 300px;"><span style="color:red">*<?php echo $usernameErr; ?></span>
                <br><br>
                Mật khẩu&ensp;&emsp;&emsp;&emsp; <input type="password" name="password" value="<?php echo $password; ?>" style="width: 300px;"><span style="color:red">*<?php echo $passwordErr; ?></span>
                <br><br>
                Nhắc lại mật khẩu <input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>" style="width: 300px;"><span style="color:red">*<?php echo $confirmpasswordErr; ?></span>
                <br><br>
                Email&ensp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp; <input type="text" name="email" value="<?php echo $email; ?>" style="width: 300px;"><span style="color:red">*<?php echo $emailErr; ?></span>
                <br><br>
                Tuổi&ensp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp; <input type="text" name="age" value="<?php echo $age; ?>" style="width: 300px;"><span style="color:red">*<?php echo $ageErr; ?></span>
                <br><br>
                Số điện thoại&ensp;&ensp;&ensp;&ensp; <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>" style="width: 300px;"><span style="color:red">*<?php echo $phonenumberErr; ?></span>
                <br><br>
                Địa chỉ&ensp;&emsp;&emsp;&emsp;&ensp;&ensp; <input type="text" name="address" value="<?php echo $address; ?>" style="width: 300px;"><span style="color:red">*<?php echo $addressErr; ?></span>
                <br><br>
                <button type="submit" class="ok" name="ok">Đăng ký</button><br><br>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer-item">
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