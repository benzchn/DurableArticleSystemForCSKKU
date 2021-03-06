<?php
include 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ระบบครุภัณฑ์ ภาควิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยขอนแก่น</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/th/c/c3/Science_KKU_Thai_Emblem.png" sizes="32x32">

    <link rel="icon" href="iconlogo.png" sizes="32x32">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=K2D&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
    <style>
    .form {
        background: rgba(19, 35, 47, 0.9);
        padding: 50px;
        max-width: 600px;
        margin: auto;
        margin-top: 40px;
        border-radius: 4px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
        opacity: 95%;

    }

    .back {
        background-image: url(http://sciweb.kku.ac.th/online_register/images/bg1.jpg);
        background-attachment: fixed;
        height: 100%;
        width: 100%;
        padding: 0px;
        margin: 0px;
        background-position: top left;
        position: relative;
        overflow-x: hidden;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .logo {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 70px;
        background: #9bb9e9;
        background: -webkit-linear-gradient(bottom, #005bea, #00c6fb);
        background: -o-linear-gradient(bottom, #005bea, #00c6fb);
        background: -moz-linear-gradient(bottom, #005bea, #00c6fb);
        background: linear-gradient(bottom, #005bea, #00c6fb);
    }


    .pagination {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 15px;
  margin: auto;
  text-align: center;
}
.pagination__dot {
  position: relative;
  /* width: 8px;
  height: 8px;
  border: 2px solid #5ae4dd; */
  border-radius: 100px;
  display: inline-block;
  cursor: pointer;
  margin: 0 4px;
  -webkit-transition: .3s;
  transition: .3s;
  text-align:center;
}
.pagination__dot--active {
  background: #5ae4dd;
}
.pagination__dot:hover {
  -webkit-transition: .3s;
  transition: .3s;
  border-color: white;
  background: white;
}
.pagination__dot:hover:before {
  top: -48px;
  opacity: 1;
}
.pagination__dot:hover:after {
  top: -18px;
  opacity: 1;
}
.pagination__dot:before {
  position: absolute;
  top: -40px;
  left: -36px;
  background: white;
  width: 250px;
  font-size: 14px;
  padding: 4px;
  margin-top: -22px;
  border-radius: 3px;
  content: attr(data-tooltip);
  opacity: 0;
  -webkit-transition: .3s;
  transition: .3s;
}
.pagination__dot:after {
  position: absolute;
  width: 0;
  height: 0;
  top: -5px;
  left: -2px;
  border-top: 10px solid white;
  border-right: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 10px solid transparent;
  content: "";
  opacity: 0;
  -webkit-transition: .3s;
  transition: .3s;
}

    </style>


</head>

<body class="back">

    <!-- <div class="limiter">
		<div class="container-login100"> -->
    <div class="containner">
        <div class="row">
            <div class="form">
                <div style="display: flex;justify-content: center;align-items: center;">
                    <img class="logo" src="images/cs_logo.png" width="350px" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-30">
                    ระบบครุภัณฑ์ สาขาวิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยขอนแก่น
                    
                </span>
                <label style="display: flex;justify-content: center;align-items: center; color:#ffffff;">
                    ------------------------ </label>

                    
                <div>

                    <form class="login100-form validate-form" method="post">


                        <div class="wrap-input100 validate-input m-b-10" data-validate="กรุณากรอกชื่อผู้ใช้งาน">
                            
                            <input class="input100" type="text" name="username"
                                placeholder="ชื่อผู้ใช้งาน">

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span> 
                            
                        </div>

                        <div data-tooltip="นักศึกษา : กรอกรหัสนักศึกษา(มีขีด) บุคลากร : ใช้อีเมล xx@kku.ac.th" class="pagination__dot">
                            <img src='https://image.flaticon.com/icons/svg/1828/1828833.svg'
                                style="float: inherit;position: absolute;" width="21px" height="21px">
                        </div>


                        <div class="wrap-input100 validate-input m-b-10" data-validate="กรุณากรอกรหัสผ่าน">
                            <input class="input100" type="password" name="password" placeholder="รหัสผ่าน">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn p-t-10">
                            <button type="submit" class="login100-form-btn" name="login">
                                เข้าสู่ระบบ
                            </button>
                        </div>
                        <div class="text-center w-full p-t-25">
                            <a class="txt1" name="create_user" href="register/register.php">
                                สมัครสมาชิก
                            </a>
                            <span class="txt2">|</span>
                            <a class="txt1" name="" href="#">
                                คู่มือใช้งาน
                            </a>
                        </div>
                        <div class="text-center w-full p-t-25">
                            <a href="#" class="txt2">
                                ลืมรหัสผ่าน ?
                            </a>

                        </div>
                    </form>
                </div>
            </div>
            <!-- form -->
        </div>
    </div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/jquery.backstretch.min.js"></script> -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>