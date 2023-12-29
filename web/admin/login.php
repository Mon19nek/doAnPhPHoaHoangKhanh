<?php 
    session_start();
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        include('./lib/config.php');
        $str = "SELECT * FROM users where username='$name' and users.password='$password'";
        $result = mysqli_query($conn, $str);

        $num_rows = mysqli_num_rows($result);
        if ($num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
        }else{
            header("Location: login.php");
        }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Admin Login</title>
        <!-- for-mobile-apps -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- //for-mobile-apps -->
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="./asset/login/css/style.css">
    </head>
    <body>
        <!--header start here-->
        <div class="header">
                <div class="header-main">
                    <h1>Login</h1>
                    <div class="header-bottom">
                        <div class="header-right w3agile">
                            
                            <div class="header-left-bottom agileinfo">
                                
                            <form action="" method="post">
                                <input type="text"   name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
                                <input type="password"  name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
                                <div class="remember">
                                <span class="checkbox1">
                                    <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
                                </span>
                                <div class="forgot">
                                    <h6><a href="#">Forgot Password?</a></h6>
                                </div>
                                <div class="clear"> </div>
                            </div>
                                <input type="submit" name="submit" value="Login">
                            </form>	
                            <div class="header-left-top">
                                <div class="sign-up"> <h2>or</h2> </div>
                            
                            </div>
                            <div class="header-social wthree">
                                    <a href="#" class="face"><h5>Facebook</h5></a>
                                    <a href="#" class="twitt"><h5>Twitter</h5></a>
                            </div>
                        </div>
                        </div> 
                    </div>
                </div>
        </div>
        <!--header end here-->
        <div class="copyright">
            <p>DT News<a href="http://localhost/web ">&ensp;Quay Lại Trang Chủ</a></p>
        </div>
        <!--footer end here-->
    </body>
</html>