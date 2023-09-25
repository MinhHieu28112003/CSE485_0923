<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style1.css">
    <script src="js/script.js"></script>
    <title>Đăng nhập</title>
</head>
<a href="https://music4life.ca/" class="x-brand">
    <img src="//music4life.ca/wp-content/uploads/2016/11/1music-for-life-logo.png" width="275" height="110.33" alt="Music 4 Life">
</a>
<div class="location"
    <a href="https://music4life.ca/"><b>TRANG CHỦ</b></a>
    <a href="link/login.php"><b>ĐĂNG NHẬP</b></a>
</div>
    <div class="location1">
        <input value="Nội dung cần tìm">
        <input value="Tìm" type="submit">
    </div>
    <section class="login">
        <center>
            <form action="/" method="POST">
                <div class="bang">
                    <h3><p>Sign In</p></h3>
                    <?php

                    function Validate() {
                        if (name == 0 && password == 0) {
                            alert("Vui lòng nhập thông tin");
                        }
                        else if (name != 0 && password == 0) {
                            alert("Vui lòng nhập mật khẩu");
                        }
                        else if (name == 0 && password != 0) {
                            alert("Vui lòng nhập tên");
                        }
                        else {
                            alert("Đăng nhập thành công");
                        }
                    }
                    ?>
                    <p><input type="text" placeholder= "username" class="full-size"></p>
                    <p><input type="text" placeholder="password"  class="full-size"></p>
                    <p><button type="submit" class="button-size" onclick="return Validate()">Login</button></p>
                    <p>Don't have an accout? <a href="https://www.instagram.com/accounts/emailsignup/" style="color: yellow"><p1>Sign Up</p1></a></p>
                    <p><a href="" style="color: yellow"><p1>Forgot your password?</a></p1></p>
                </div>
            </form>
    </center>
</section>
<hr><div class="text1"><br>TLU'S MUSIC GARDEN</br></div>
</body>
</html>