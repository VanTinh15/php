<?php
    session_start();
    ob_start();

    include "../model/connectdb.php";
    include "../model/ketnoi/danhmuc.php";
    include "../model/ketnoi/baiviet.php";
    include "../model/ketnoi/khoahoc.php";
    include "../model/ketnoi/taikhoan.php";
    include "../model/ketnoi/tailieu.php";
    
    connectdb();
    
    

    if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
        $user= $_POST['user'];
        $password = $_POST['password'];
        $account_type = checkuser($user,$password);
        $_SESSION['account_type'] = $account_type;
        if($account_type == 1){
          
            header('location:index.php');
        }else{
           $txt_eror = "Tên tài khoản hoặc mật khẩu không đúng";
        }
    }


?>





<div class="login-page">
  <div class="form">
    
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>Tạo mới</button>
      <p class="message">Đã có tài khoản <a href="#">Đăng Nhập</a></p>
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="login-form" method ="POST">
      <input type="text" name="user" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" name="dangnhap" value="Đăng Nhập">Đăng nhập</button>
      <p class="message">Chưa đăng ký? <a href="#">Đăng ký tài khoản</a></p>
      <?php 
        if(isset($txt_eror) && ($txt_eror != "")){
            echo '<h8 style="color: red;">'.$txt_eror.'</h8>';
        }
      ?>
    </form>
  </div>
</div>



<!-- css -->
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: rgb(141,194,111);
  background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>


<script>
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>